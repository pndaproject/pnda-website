#!/bin/bash

BUILDTAG=$(echo ${release} | sed -e 's#.*/##')
if( [ -z "$BUILDTAG" ] || [ "$BUILDTAG" = "lis" ] ) then
  BUILDTAG="latest"
fi

build_website() {
  echo "Git hash $GIT_COMMIT" > src/MANIFEST
  echo "Version  $BUILDTAG" >> src/MANIFEST

  mv src pnda-website-$BUILDTAG
  tar zcf pnda-website-$BUILDTAG.tar.gz pnda-website-$BUILDTAG
  sha512sum pnda-website-$BUILDTAG.tar.gz > pnda-website-$BUILDTAG.tar.gz.sha512.txt
}

deploy_website() {
  local TARGET_REPO=$1
  local WWW_DIR=$2

  echo "Wesite info: IP[${WEBSITE_IP}] PEM[${WEBSITE_PEM}] USER[${WEBSITE_USER}]"
  ssh -i ${WEBSITE_PEM} -T ${WEBSITE_USER}@${WEBSITE_IP} sudo mkdir -p ${TARGET_REPO}
  scp -i ${WEBSITE_PEM} pnda-website-$BUILDTAG.tar.gz ${WEBSITE_USER}@${WEBSITE_IP}:/tmp/pnda-website-${BUILDTAG}.tar.gz

  ssh -i ${WEBSITE_PEM} -T ${WEBSITE_USER}@${WEBSITE_IP} <<EOSSH
    cd ${TARGET_REPO}
    sudo tar -zxf /tmp/pnda-website-${BUILDTAG}.tar.gz
    sudo rm -rf /tmp/pnda-website-${BUILDTAG}.tar.gz

    sudo chown -R www-data:www-data pnda-website-${BUILDTAG}
    sudo chmod -R uog-w pnda-website-${BUILDTAG}

    sudo chmod -R ug+w pnda-website-${BUILDTAG}/{pages,shared,config,cache}

    sudo rm -rf ${WWW_DIR}
    sudo ln -s ${TARGET_REPO}/pnda-website-${BUILDTAG} ${WWW_DIR}
    sudo chown www-data:www-data ${WWW_DIR}
    sudo service php5-fpm restart
EOSSH
}

build_website

case "${deployment}" in
        "staging") deploy_website "/opt/staging-doc-archive" "/opt/staging-doc"
        ;;
        "production") deploy_website "/opt/public-doc-archive" "/opt/public-doc"
        ;;
        *) echo "NOTHING TO DEPLOY"
        ;;
esac

