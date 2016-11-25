<?php
## form_intf.php
#
# This file is used as an interface for Javascript
# to dynamically generate parent input section
# PLEASE DO NOT include this file in any other php
# script file
#
# Written by: dousha

include('form.php');

$num = $_POST['num'];

?>
<hr>
<div id="parent_<?php echo $num?>">
	<?php echo input_pair('姓名', "p_name_$num"); ?>
	<?php echo input_pair('与被监护人关系', "p_relationship_$num"); ?>
	<?php echo input_pair('民族', "p_race_$num"); ?>
	<?php echo input_pair('身份证号', "p_ident_$num", '123456789012345678 或 12345678901234567X'); ?>
	<?php echo input_pair('手机号码', "p_phone_$num"); ?>
</div>
