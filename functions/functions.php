<?php

switch ($_SERVER["SCRIPT_NAME"]) {
	case "/about.php":
		$CURRENT_PAGE = "About";
		$PAGE_TITLE = "About Us";
		break;
	case "/contact.php":
		$CURRENT_PAGE = "Contact";
		$PAGE_TITLE = "Contact Us";
		break;
	case "/services.php":
		$CURRENT_PAGE = "Services";
		$PAGE_TITLE = "Our Services";
		break;
    case "/details.php":
		$CURRENT_PAGE = "Details";
		$PAGE_TITLE = "Service Details";
		break;
	default:
		$CURRENT_PAGE = "Index";
		$PAGE_TITLE = "Welcome to Contoso Costume Rentals";
}

/**
 * Returns the name of the Web app.
 */
function app_name()
{
    echo config('name');
}

/**
 * Returns the Web app URL.
 */
function app_url()
{
    echo config('app_url');
}

/**
 * Returns a page-specific image.
 */
function page_top_image($page)
{
	if (config('graphics') == 'true') {
		echo '<img src="/images/' . $page . '.png" alt="' . $page . '" title="' . $page . '" />';
	} else {
		echo ' ';
	}
}

/**
 * Returns a generated image.
 */
function page_bottom_image()
{
	if (config('graphics') == 'true') {
		echo '<img src="/images/generate-image.php" alt="' . config('name') . '" title="' . config('name') . '" width="600" height="100" >';
	} else {
		echo ' ';
	}
}

?>