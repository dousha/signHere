<html>
<?php
	include("lib/header.php");

	head("hello");
?>
<body>
<?php
	include("lib/panel.php");
	$pm = new PanelManager();
	$p = $pm->create_panel();
	$pm->fill_panel($p, '1', '2', '3');
	$p2 = $pm->create_panel();
	$pm->fill_panel($p2, 'a', 'b', 'c');
	$pm->destory_panel(0);
	$pm->render();
?>
</body>
</html>
