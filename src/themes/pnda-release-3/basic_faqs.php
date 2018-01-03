<?php defined('AUTOMAD') or die('Direct access not permitted!'); ?>
@i(elements/header.php)



	<div class="container">
		<div class="row">
			<div id="title" class="col-md-12">
				<h1>@p(subtitle)</h1>
			</div>
			<div class="col-md-12">
				<ul id="faqsList" class="collapsibleFaqList">
				@p(faqs_list)
			</ul>
			</div>
		</div>

	</div>

<script type="text/javascript">
    CollapsibleLists.applyTo(document.getElementById('faqsList'));
</script>
@i(elements/footer.php)
