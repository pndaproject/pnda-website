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
<div class="container-fluid basic-page-content" id="news-content">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        @p(press-releases)
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        @p(coming-up)
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        @p(past-events)
      </div>
    </div>
  </div>
</div>

@i(elements/footer.php)
