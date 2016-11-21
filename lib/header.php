<?php
## header.php
#
# void head(title);
# Creates a common &lt;head&gt; section (closed).
# title - page title
#
# written by dousha

function head($title){
	?>
	<head>
		<title><?php echo $title; ?></title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="assets/bootstrap.min.css"><!-- bootstrap CSS -->
		<script src="assets/jquery.min.js"></script><!-- jQuery required by other stuff -->
		<script src="assets/bootstrap.min.js"></script><!-- bootstrap js -->
		<script src="assets/form_ctrl.js"></script><!-- form validating -->
		<script src="assets/pic_ctrl.js"></script><!-- picture manipulating -->
	</head>
<?php
}
?>

