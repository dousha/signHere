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
		<link rel="stylesheet" href="assets/bootstrap.min.css">
		<script src="assets/jquery.min.js"></script>
		<script src="assets/bootstrap.min.js"></script>
	</head>
<?php
}
?>

