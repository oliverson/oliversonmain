<?php

defined('APP_NAME') || define('APP_NAME', 'Smashing');
defined('APP_VERSION') || define('APP_VERSION', 'v1.0');

/*
 * Config
*/
defined('DEV') || define('DEV', true); 								// development / production
defined('LEVEL') || define('LEVEL', 0); 							// default level / used for getURL paths
defined('GA') || define('GA', true); 								// google analytics

defined('MENU_JS') || define('MENU_JS', true); 						// allow menu customization from the browser
defined('MENU_POSITION') || define('MENU_POSITION', false);  // 'menu-right' or false for default
defined('SKIN_JS') || define('SKIN_JS', true); 						// allow skin customization from the browser
defined('SKIN_CUSTOM') || define('SKIN_CUSTOM', false); 			// filename without extension (eg. "brown") or false for default
defined('SKIN') || define('SKIN', SKIN_JS ? false : SKIN_CUSTOM); 	// edit SKIN_CUSTOM above

$page = isset($_GET['page']) ? $_GET['page'] : 'index';				// login / index (for dashboard) / choose (demo start page) / filename without extension
$section = isset($_GET['section']) ? $_GET['section'] : 'index';
$sub_section = isset($_GET['ss']) ? $_GET['ss'] : 'index';

$_LEVEL = LEVEL; // used for getURL paths

/*
 * Zend_Translate
 */
define('APP_PATH',	realpath(dirname(__FILE__)));
define('APP_LANG',	APP_PATH . '/lang');

require_once 'Zend/Translate.php';

$locale = isset($_GET['lang']) ? $_GET['lang'] : 'en'; // default language
$translate = new Zend_Translate( array( 'adapter' => 'csv', 'content' => APP_LANG, 'scan' => Zend_Translate::LOCALE_DIRECTORY ) );
$translate->setLocale($locale);

require_once 'functions.php';

/*
if ($page == 'choose') 
{
	require_once 'pages/choose.php';
	exit(0);
}
else
*/
require_once 'pages/header.php';

switch ($page)
{
	default: 
		// 404
		break;

	case 'index':
	case 'index_v2':
	case 'login':
	case 'my_account':
	case 'pages':
	case 'grid':
	case 'ui':
	case 'widgets':
	case 'form_elements':
	case 'form_wizard':
	case 'form_validator':
	case 'file_managers':
	case 'tables':
	case 'tables_themed':
	case 'tables_enhanced':
	case 'calendar':
	case 'gallery':
	case 'charts':
	case 'bookings':
	case 'finances':
	case 'products':
	case 'product_edit':
	case 'documentation':
		if (file_exists('pages/' . $page . '.php')) require_once 'pages/' . $page . '.php';
		break;
	
}

require_once 'pages/footer.php';