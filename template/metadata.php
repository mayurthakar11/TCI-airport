<?php if (strpos($_SERVER['SCRIPT_FILENAME'], 'about.php')) { ?>
    <title>About Us - Jwellery</title>
 

<?php } else if (strpos($_SERVER['SCRIPT_FILENAME'], 'contact-us.php')) { ?>
    <title>Contact Us - Jwellery</title>
 

<?php } else if (strpos($_SERVER['SCRIPT_FILENAME'], 'index.php')) { ?>
    <title>Jwellery</title>
 
 
 

<?php } else { ?>
    <title>Jwellery</title>
<!--    <meta name="description" content="" />
    <meta name="keywords" content="" />-->
<?php } ?>