<?php defined('AUTOMAD') or die('Direct access not permitted!'); ?>
@i(elements/header.php)


	<iframe id="guide" src="../pnda-guide/gettingstarted/" style="border: 0; position: fixed; overflow: hidden; margin-top: 50px; width:100%; height:calc(100% - 50px);"></iframe>

<script>

var iframe = document.getElementById("guide");
var page = window.location.hash;

if (page != undefined) {
    if (page[0] == '#') page = page.slice(1);
    iframe.src = "pnda-guide/" + page;
}

</script>

@i(elements/nofooter.php)
