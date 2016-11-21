<?php
## popup_intf.php
# This file is a POST Javascript interface!
# DO NOT INVOKE IN ANY OTHER PHP FILE!
#
# (POST request) yields a popup div
# POST arguments
# 	content - popup content
#	level - popup level
#
# Written by: dousha

$content = $_POST['content'];
$level = $_POST['level'];

include('popup.php');

create_popup($content, $level, 1);
?>
