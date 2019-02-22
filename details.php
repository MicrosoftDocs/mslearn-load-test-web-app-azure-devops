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
            <?php parse_url($_SERVER["QUERY_STRING"], PHP_URL_QUERY);
            $prod = $_GET['product'];
            include('products/' . $prod . '.php');
            $referer = filter_var($_SERVER['HTTP_REFERER'], FILTER_VALIDATE_URL);
            echo '<p><a href="'. $referer .'" title="Return to the previous page">&laquo; Go back</a></p>';

            ?>
 		</div>
		<?php page_bottom_image(); ?>
		<br />
		<?php include("includes/content_footer.php");?>
	</div>
</body>
</html>