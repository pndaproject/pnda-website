<?php defined('AUTOMAD') or die('Direct access not permitted!'); ?>
@i(elements/header.php)

<div class="container-fluid basic-page">
  <div class="row">
    <div class="sky">
      <div class="container">
        <div class="slide-overlay">
          <h2 class="title">
            @p(subtitle)
          </h2>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="container-fluid basic-page">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <center>
          <h4 style="line-height: 130%;">
            @p(page-content)
          </h4>
        </center>
      </div>
    </div>
  </div>
</div>
<div class="container-fluid basic-page-content">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        @p(psm-header)
        <center>
          @x(Carousel { files: "../images/ciscolive/psm-1.png, ../images/ciscolive/psm-2.png", width: 960, height: 520, duration: 5000, controls: true })
        </center><br>
        @p(psm)<br>
        <br>
      </div>
    </div>
  </div>
</div>
<div class="container-fluid basic-page-content" style="background-color: #eee;">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        @p(gilan-header)
        <center>
          @x(Carousel { files: "../images/ciscolive/gilan-1.jpg, ../images/ciscolive/gilan-2.jpg, ../images/ciscolive/gilan-3.jpg", width: 935, height: 475, duration: 5000, controls: true })
        </center><br>
        @p(gilan)<br>
        <br>
      </div>
    </div>
  </div>
</div>
<div class="container-fluid basic-page-content">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        @p(paris-iot-header)
        <center>
          @x(Carousel { files: "../images/ciscolive/paris-iot-1.png, ../images/ciscolive/paris-iot-2.png, ../images/ciscolive/paris-iot-3.png, ../images/ciscolive/paris-iot-4.png", width: 900, height: 525, duration: 5000, controls: true })
        </center><br>
        @p(paris-iot)
      </div>
    </div>
  </div>
</div>
<div class="container-fluid basic-page-content" style="background-color: #eee;">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        @p(ioam-header)
        <center>
          <iframe width="800" height="450" src="https://www.youtube.com/embed/Pj0f68499XU" frameborder="0" allowfullscreen=""></iframe>
        </center><br>
        @p(ioam)<br>
        <br>
      </div>
    </div>
  </div>
</div>


@i(elements/footer.php)
