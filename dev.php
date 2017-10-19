<?php include './languages/common.php';?>

<!DOCTYPE html>
<html>
<head>
	<link rel="icon" type="image/png" href="fav.png">
	<link rel="stylesheet" href="./styles/menu.css"/>
  <link rel="stylesheet" href="./styles/slides.css"/>

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

  <div class="container">

    <div class="slide-one">
      <div id="slideshow">
        <div class="slide-wrapper">
          <div class="slide"><img src="./images/cover/cover1.png" alt="cover"></div>
          <div class="slide"><img src="./images/cover/cover2.png" alt="cover"></div>
          <div class="slide"><img src="./images/cover/cover3.png" alt="cover"></div>
          <div class="slide"><img src="./images/cover/cover4.png" alt="cover"></div>
        </div>
      </div>
    </div>

    <div class="slide-two">
      <div id="slideshow">
        <div class="slide-wrapper">
          <div class="slide"><img src="./images/cover/cover1.png" alt="cover"></div>
          <div class="slide"><img src="./images/cover/cover2.png" alt="cover"></div>
          <div class="slide"><img src="./images/cover/cover3.png" alt="cover"></div>
          <div class="slide"><img src="./images/cover/cover4.png" alt="cover"></div>
        </div>
      </div>
    </div>

    <div class="slide-three">
      <div id="slideshow">
        <div class="slide-wrapper">
          <div class="slide"><img src="./images/cover/cover1.png" alt="cover"></div>
          <div class="slide"><img src="./images/cover/cover2.png" alt="cover"></div>
          <div class="slide"><img src="./images/cover/cover3.png" alt="cover"></div>
          <div class="slide"><img src="./images/cover/cover4.png" alt="cover"></div>

        </div>
      </div>
      </div>
    </div>


</body>
</html>
