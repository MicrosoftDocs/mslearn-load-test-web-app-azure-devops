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
			<br>
			<p>Professional hire for classic, vintage, and contemporary costumes.</p> 
			<p></p>Use for shop displays, TV, film, theater or promotional events, parties, weddings, graduations, our wide range will meet all your needs.</p>
			<p>All costumes are categorised by period, size, comfort and look.</p>
			<p>Book an appointment to visit our costume store, our professional and knowledgeable team is on hand with expert fitting and styling advice.</p>
		</div>
		<?php page_bottom_image(); ?>
		<br />
		<?php include("includes/content_footer.php");?>
	</div>
</body>
</html>