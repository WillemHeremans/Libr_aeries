<?php include './languages/common.php';?>

<!DOCTYPE html>
<html>
<head>
	<link rel="icon" type="image/png" href="fav.png">

	<link rel="stylesheet" href="./styles/menu.css"/>
<title><?php echo $lang['PAGE_TITLE']; ?></title>

</head>

<body>


  <ul class="menu">
    <li class="menu" id="logo"><img src="./images/logo.png" alt="logo"></li>
    <li class="menu" id="first-entry"><a href="/"><?php echo $lang['MENU_LITT']; ?></a></li>
    <li class="menu"><a href="about_us"><?php echo $lang['MENU_JEUN']; ?></a></li>
    <li class="menu"><a href="our_products"><?php echo $lang['MENU_INT']; ?></a></li>
    <li class="menu"><a href="contact_us"><?php echo $lang['MENU_SCIENCES']; ?></a></li>
    <li class="menu"><a href="advertise"><?php echo $lang['MENU_BD']; ?></a></li>
    <li class="menu"><a href="sitemap"><?php echo $lang['MENU_CONTACT']; ?></a></li>
      </ul>




</body>
</html>
