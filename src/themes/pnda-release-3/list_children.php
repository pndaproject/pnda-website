<?php defined('AUTOMAD') or die('Direct access not permitted!'); ?>
@i(elements/header.php)

	<div class="container">

		<div class="row">
			<div id="title" class="col-md-12">
				<h1>@p(title)</h1>
				<h3>@p(subtitle)</h3>
			</div>
			<div class="col-md-12">
				@p(text)
			</div>
		</div>

		<div class="row">
			@t(listConfig { type: "children" })
			<div class="col-md-6">
				@t(listFilters)
			</div>
			<!--
			<div class="col-md-6">
				@t(listSort {
					"Original Order": {
					        sortOrder: "asc"
					    },
					    "Title": {
					        sortItem: "title",
					        sortOrder: "asc"
					    }
				})
			</div>
		-->
		</div>



		<div class="row">
			@t(listPages {
				variables: "title, subtitle",
				glob: "*.jpg, *.png",
				width: 350,
				height: 350,
				crop: true,
				class: "item image col-xs-6 col-sm-6 col-md-4 col-lg-3",
				firstWidth: 800,
				firstHeight: 800,
				firstClass: "item image col-xs-6 col-sm-6 col-md-4 col-lg-3"
			})
		</div>

	</div>

@i(elements/footer.php)
