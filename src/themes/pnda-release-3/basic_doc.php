<?php defined('AUTOMAD') or die('Direct access not permitted!'); ?>
@i(elements/header.php)

	<div class="container">

		<div class="row">
			<div id="title" class="col-md-12">
				<h1>@p(subtitle)</h1>
			</div>
			<div class="col-md-6">
				@p(text)
			</div>
			<div class="col-md-6">
				@p(text_2)
			</div>
		</div>

	</div>

@i(elements/footer.php)
