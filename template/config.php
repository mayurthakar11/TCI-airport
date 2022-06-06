<?php
	session_start();
	error_reporting(0);

	$pagelink = $_SERVER['REQUEST_URI'];
    $pagelink_array = explode('/',$pagelink);
    $page_active = end($pagelink_array);
    define('PAGE_URL', $page_active);
?>
<!-- build:define -->
<?php
    define('SITE_PATH', 'http://localhost/TCIAA/');
 ?>
<!-- endbuild -->
<?php
	define('SITE_NAME', "TCIAA");
	define('DOMAIN', "www.domainname.com");	
	define('JSV', "javascript:void(0)");

	define('PHONE', '');
	define('FAX', '');
	define('EMAIL', '');
	define('ADDRESS', '');

	define('FACEBOOK', '#');
	define('TWITTER', '#');
	define('YOUTUBE', '#');
	define('LINKEDIN', '#');

	define('HOME', '');
 	define('ABOUT', 'about.php');
	define('CONTACT', 'contact-us.php');
	define('DETAIL', 'detail.php');
 	define('GALLERY', 'gallery.php');
	define('PRIVACY-POLICY', 'privacy-policy.php');
	define('SITE-MAP', 'site-map.php');
 
?>