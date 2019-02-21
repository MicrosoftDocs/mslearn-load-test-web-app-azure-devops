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
			<h2>About page</h2>
			<br />
			<p>Contoso Costume Rentals are your premier source of costume hire.</p>
			<p>We've been operating for 1 year, and are now expanding.</p>
		</div>
		<?php page_bottom_image(); ?>
		<br />
		<?php include("includes/content_footer.php");?>
	</div>
</body>
</html>