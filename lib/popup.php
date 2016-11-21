<?php
## popup.php
#
# raw_html create_popup(string $content,
#						int $level = 0,
#						int $dismiss = 0)
# Create a popup dialog, where
# content - popup content
# level - popup level
# where...
# level can be 0, 1, 2, 3
# 	0 - success (green)
# 	1 - warning (yellow)
# 	2 - danger (red)
# 	3 - info (blue)
#
# dismiss - popup is dismissible, 0 if is not dismissible
#
# Written by: dousha

function create_popup(string $content, 
						int $level = 0, 
						int $dismiss = 0){
	?>
	<div class="alert 
		<?php 
			switch($level){
				case 0:
					echo 'alert-success';
					break;
				case 1:
					echo 'alert-warning';
					break;
				case 2:
					echo 'alert-danger';
					break;
				default:
					echo 'alert-info';
					break;
			}
		?>
		<?php if($dismiss != 0) echo 'alert-dismissible'; ?>
		" role="alert">
			<?php if($dismiss != 0){ ?>
				<button type="button" 
						class="close" 
						data-dismiss="alert" 
						aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			<?php } ?>
			<?php echo $content; ?>
		</div>
	<?php
}
?>
