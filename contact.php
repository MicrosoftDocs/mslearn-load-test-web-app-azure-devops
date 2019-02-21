<?php
include("includes/config.php");
include("functions/functions.php");
?>

<!DOCTYPE html>
<html>
<head>
	<link href="<?php app_url(); ?>/includes/styles.css" rel="stylesheet" type="text/css" />
	<?php include("includes/content_head.php");?>
</head>
<body>
	<div class="content">
		<?php page_top_image($CURRENT_PAGE); ?>
		<h1>
			<?php app_name(); ?>
		</h1>
		<?php include("includes/navigation.php");?>

		<div class="article">
			<h2>Contact page</h2>
			<br />
			<p>To contact us:</p>
			<p>Phone: 555-0100</p>
			<p>Or visit our store : 4567 Main St Buffalo, NY 98052</p>
		</div>
		<?php page_bottom_image(); ?>
		<br />
		<?php include("includes/content_footer.php");?>
	</div>
</body>
</html>