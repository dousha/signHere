<!DOCTYPE html>
<html>
<?php
	include("lib/header.php");
	include("lib/panel.php");
	include("lib/nav.php");
	include("lib/form.php");
	head('洛阳外国语学校在线报名系统');
?>
<body>
<?php
	$pm = new PanelManager();
	$p = $pm->create_panel();
	$pm->fill_panel_f($p, form_heading, form_body, form_footer);
?>
	<div class="container">
<?php
	$pm->render();
?>
	</div>
</body>
</html>
