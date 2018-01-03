# PNDA Website

This website is build with Automad, a flat-file content management framework. 

## Deployment

Tag the project like this:

```
git tag -a 'release/1.0.1' -m 'Added a tag'
git push origin master --tags
```

This will trigger the `build_public_website` task in Jenkins. You can also run this task manually. It will create an archive in swift at:

```
releases/public-documentation/pnda-website-1.0.1.tar.gz
```

You'll want to build the `pnda-guide` as well. Give that repo a tag the same way, e.g. `release/1.0.2`. Jenkins will use the `gitbook` tool to build the HTML version of the guide and upload it to swift:

```
releases/public-documentation/pnda-guide-1.0.2.tar.gz
```

Run the download script to download the website and guide archives to your computer, using the version tags for the website and guide:

```
scripts/download.sh -w 1.0.1 -g 1.0.2
```

Then run these two scripts to upload the website and guide:

```
scripts/upload.sh pnda-website 0.1.34 production
```

* The first argument is the web server host. You may define a shortcut such as `pnda-website` in `~/.ssh/config`. 
* The second argument is the name of the archive, containing the release tag.
* The third argument can be `staging` or `production`. The staging website is served internally on port 8080, while the public production website is served externally on port 80.

## Symbolic links

There is a `pnda-guide` symbolic link inside the `src` directory that takes you up a directory:

```
pnda-website/src/pnda-guide -> ../pnda-guide
```

In development, there's another symbolic link that points to the `_book` folder in the `pnda-guide` repo, which should be located next to the `pnda-website` repo:

```
pnda-website/pnda-guide -> ../pnda-guide/_book
```

In production, the `public-doc-archive` or `staging-doc-archive` folders contain versioned folders for both the website and guide. The `guide-upload.sh` script creates a shortcut to the latest version of the guide:

```
cloud-user@pnda-website:/opt$ ls -al staging-doc-archive/
pnda-guide -> pnda-guide-1.0.2
pnda-guide-1.0.2
pnda-website-1.0.1
```

Now when the `pnda-guide` link goes up a directory, it finds that shortcut. 

Note that Automad has a `/guide` page that contains an `iframe` that loads the `/pnda-guide` page:

```
<iframe src="../pnda-guide/" style="border: 0; width:100%; height:100%"></iframe>
```

In order for Automad to not rewrite that path, it needs an exception in `.htaccess`:

```
# Exclude home page from rewriting
RewriteRule ^$ - [L]
RewriteRule ^(pnda-guide)($|/) - [L]
```

Further, for the `.htaccess` file to be able to override this, you'll need to configure your `/etc/apache2/httpd.conf` file with `AllowOverride All` for your webserver documents folder:

```
LoadModule rewrite_module libexec/apache2/mod_rewrite.so
LoadModule php5_module libexec/apache2/libphp5.so

DocumentRoot "/Library/WebServer/Documents"
<Directory "/Library/WebServer/Documents">
    AllowOverride All
</Directory>
```

(This example is on a Mac, your paths may be different.)




