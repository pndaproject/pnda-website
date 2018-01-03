<?php defined('AUTOMAD') or die('Direct access not permitted!'); ?>
@i(elements/header.php)

<div class="container-fluid">
    <div class="row">
        <div class="frontpageslide__item">
            <div class="container">
                <div class="col-md-8 col-xs-12 col-sm-8">
                    <div class="slide-overlay">
                        <img src="../images/logo-big.png" align="left" width="120" style="margin-top: 12px; margin-right: 50px; margin-bottom: 100px;">
                        <!--<p class="intro">@p(welcome-line-1)</p>-->
                        <!--<h2 class="title">@p(welcome-line-2)</h2>-->
                        <!--<h3>@p(welcome-line-3)</h3>-->
                        <h3 style="margin-top: 40px;"><br>@p(vision-short-detail)<br><br></h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid features" id="community-guide-dev">
    <div class="container">
<?php
$maxByLine = 3;
$elementCount = 6;
for ($i = 0 ; $i < $elementCount ; $i+=$maxByLine) {
?>
        <div class="row">
            <div class="row-height">
<?php
    for ($j = 0 ; $j < $maxByLine ; $j++) {
?>
                <div class="col-xs-12 col-sm-4 col-sm-height col-md-4 col-md-height">
                    <a href="@p(link-<?=$i+$j+1?>-link)" class="full-height-link">
                        <div class="inside inside-full-height feature card">
                            <div class="padded-box">
                                <i class="@p(link-<?=$i+$j+1?>-icon)"></i>
                                <h3>@p(link-<?=$i+$j+1?>-title)</h3>
                                <p>@p(link-<?=$i+$j+1?>-detail)</p>
                            </div>
                        </div>
                    </a>
                </div>
<?php
    }
?>
            </div>
        </div>
<?php
}
?>
    </div>
</div>
<!--
<div class="container-fluid" style="background-color:#2A47D8;>
    <div class="container">
        <div class="row">
           <div class="col-md-12 col-sm-12 col-xs-12" id="console">
                <center>
                    <a href="ciscolive"><img src="../images/news/cisco-live-lasvegas-2016.png" width="100%" style="max-width: 710px;"/></a>
                </center>
            </div>
        </div>
    </div>
</div>
-->
<div class="container-fluid features">
    <div class="col-md-12 backg">
        <div class="container">
<?php
$maxByLine = 3;
$elementCount = 6;
for ($i = 0 ; $i < $elementCount ; $i+=$maxByLine) {
?>
            <div class="row">
                <div class="row-height">
<?php
    for ($j = 0 ; $j < $maxByLine ; $j++) {
?>
                    <div class="col-xs-12 col-sm-4 col-sm-height col-md-4 col-md-height">
                        <div class="inside inside-full-height feature">
                            <div class="padded-box">
                                <i class="@p(feature-<?=$i+$j+1?>-icon)"></i>
                                <h3>@p(feature-<?=$i+$j+1?>-title)</h3>
                                <p>@p(feature-<?=$i+$j+1?>-detail)</p>
                            </div>
                        </div>
                    </div>
<?php
    }
?>
                </div>
            </div>
<?php
}
?>
        </div>
    </div>
</div>

<!-- with blue background
<div class="container-fluid features" id="page-main">
    <div class="container">
<?php
$maxByLine = 3;
$elementCount = 6;
for ($i = 0 ; $i < $elementCount ; $i+=$maxByLine) {
?>
        <div class="row">
            <div class="row-height">
<?php
    for ($j = 0 ; $j < $maxByLine ; $j++) {
?>
                <div class="col-xs-12 col-sm-4 col-sm-height">
                    <div class="inside inside-full-height feature">
                        <div class="padded-box">
                            <i class="@p(feature-<?=$i+$j+1?>-icon)"></i>
                            <h3>@p(feature-<?=$i+$j+1?>-title)</h3>
                            <p>@p(feature-<?=$i+$j+1?>-detail)</p>
                        </div>
                    </div>
                </div>
<?php
    }
?>
            </div>
        </div>
<?php
}
?>
    </div>
</div>
-->

<div class="container-fluid features">
    <div class="container">
        <div class="row">
            <div class="row-height">
                <div class="col-xs-10 col-sm-6 col-md-6 col-sm-height">
                    <a href="@p(link-7-link)" class="full-height-link">
                        <div class="inside inside-full-height feature card">
                            <div class="contact-box">
                                <i class="@p(link-7-icon)"></i>
                                <h3 class="inline">@p(link-7-title)</h3>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-xs-10 col-sm-6 col-md-6 col-sm-height">
                    <a href="https://twitter.com/pndaproject" class="full-height-link">
                        <div class="inside inside-full-height feature card">
                            <div class="contact-box">
                                <i class="fa fa-twitter"></i>
                                <h3 class="inline">@p(link-8-title)</h3>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<a href="https://github.com/pndaproject?tab=repositories"><img style="position: absolute; top: 50px; right: 0; border: 0; top-margin: 50px; z-index: 100" src="https://camo.githubusercontent.com/365986a132ccd6a44c23a9169022c0b5c890c387/68747470733a2f2f73332e616d617a6f6e6177732e636f6d2f6769746875622f726962626f6e732f666f726b6d655f72696768745f7265645f6161303030302e706e67" alt="Fork me on GitHub" data-canonical-src="https://s3.amazonaws.com/github/ribbons/forkme_right_red_aa0000.png"></a>

@i(elements/footer.php)
