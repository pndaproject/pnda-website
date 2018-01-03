<?php defined('AUTOMAD') or die('Direct access not permitted!'); ?>
@i(elements/header.php)

<script>

$(document).ready(function() {
    $('area[tooltip]').qtip({
        content: {
            attr: 'tooltip' // Use the ALT attribute of the area map for the content
        },
        position: {
            my: 'top left',  // Position my top left...
            at: 'bottom left', // at the bottom right of...
            adjust: {
                x: 7, y: 0
            }
        }
    });
});

</script>

<div id="overview">

    <div class="container-fluid basic-page">
        <div class="row">
            <div class="sky">
                <div class="container">
                    <div class="slide-overlay">
                        <h2 class="title">@p(top_right)</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid basic-page-content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                  <h1>Overview</h1>
                </div>
            </div>
        </div>
  	</div>

<?php
    for ($i = 0 ; $i < 14 ; $i++) {
?>

	<div class="container-fluid">
        <div class="container">
            <div class="row row-shadow">
<?php
        $even = $i % 2 == 0;
        if ($even) {
?>
                <div class="text-box">
                    <h1>@p(title<?=$i+1?>)</h1>
                    @p(text<?=$i+1?>)
                </div>
<?php
        }
?>
                <div class="image-box <?= $even ? "right" : "left" ?>">
                   <img src="../images/overview/@p(image<?=$i+1?>)" width="360" height="240">
                </div>
<?php
        if (!$even) {
?>
                <div class="text-box">
                    <h1>@p(title<?=$i+1?>)</h1>
                    @p(text<?=$i+1?>)
                </div>
<?php
        }
?>
            </div>
        </div>
	</div>
<?php
    }
?>

    <div class="container-fluid basic-page-content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                  <h1>Presentation</h1>
<p>This <a href="//www.slideshare.net/JohnEvans75/pnda-platform-for-network-data-analytics" title="PNDA - Platform for Network Data Analytics" target="_blank">presentation</a> provides an overview of the PNDA platform.<br><br></p>
                  <center>
<p>
  <iframe src="//www.slideshare.net/slideshow/embed_code/key/781ce7vuYxBcLt" width="595" height="485" frameborder="0" marginwidth="0" marginheight="0" scrolling="no" style="border:1px solid #CCC; border-width:1px; margin-bottom:5px; max-width: 100%;" allowfullscreen=""></iframe>
</p>
                  </center>
                </div>
            </div>
        </div>
	</div>

    <!-- Console screenshot -->
	<div class="container-fluid" style="background-color: #eee;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Console</h1>
                    The PNDA console provides a dashboard for all components in a cluster. Point to a component for a description.
                    <div class="col-md-12 col-sm-12 col-xs-12" id="console">
                        <img src="../images/console.png" width="1080" class="console" usemap="#tooltips"/>
                        <map id="tooltips" name="tooltips">
                            <area shape="rect" coords="94,231,300,272" tooltip="@p(kafka-tooltip)">
                            <area shape="rect" coords="94,437,299,477" tooltip="@p(zookeeper-tooltip)">
                            <area shape="rect" coords="358,260,481,319" tooltip="@p(spark-streaming-tooltip)">
                            <area shape="rect" coords="524,260,649,301" tooltip="@p(spark-tooltip)">
                            <area shape="rect" coords="524,319,648,359" tooltip="@p(oozie-tooltip)">
                            <area shape="rect" coords="343,380,663,420" tooltip="@p(yarn-tooltip)">
                            <area shape="rect" coords="706,231,824,271" tooltip="@p(impala-tooltip)">
                            <area shape="rect" coords="343,532,577,574" tooltip="@p(hbase-tooltip)">
                            <area shape="rect" coords="590,533,823,573" tooltip="@p(hive-tooltip)">
                            <area shape="rect" coords="343,591,824,632" tooltip="@p(hdfs-tooltip)">
                            <area shape="rect" coords="877,202,1097,242" tooltip="@p(deployment-manager-tooltip)">
                            <area shape="rect" coords="706,320,824,348" tooltip="@p(jupyter-tooltip)">
                            <area shape="rect" coords="706,397,824,425" tooltip="@p(opentsdb-tooltip)">
                            <area shape="rect" coords="706,434,824,462" tooltip="@p(grafana-tooltip)">
                        </map>
                    </div>
                </div>
            </div>
        </div>
	</div>

    <div class="container-fluid basic-page-content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                  <h1>Technologies</h1>
<p>PNDA incorporates a number of open source technologies, including:</p>
                  </center>
                </div>
            </div>
        </div>
	</div>
    <div id="logos">
<?php
    for ($i = 0 ; $i < 23 ; $i++) {
?>
        <div class="logo"><a href="@p(logo-link-<?=$i+1?>)"><img src="../images/logos/@p(logo-img-<?=$i+1?>)" class="logo"></a></div>
<?php
    }
?>

    </div>
</div>

<script src="@t(themeURL)/js/jquery.rwdImageMaps.min.js"></script>
<script>
$(document).ready(function(e) {
	$('img[usemap]').rwdImageMaps();
});
</script>

@i(elements/footer.php)
