<?php include './languages/common.php';?>
<?php include './database/connect.php';?>

<?php

$root = '';
$path = './images/cover/';
$imgList = getImagesFromDir($root . $path);
$img = getRandomFromArray($imgList);

function getImagesFromDir($path) {
    $images = array();
    if ( $img_dir = @opendir($path) ) {
        while ( false !== ($img_file = readdir($img_dir)) ) {
            // checks for gif, jpg, png
            if ( preg_match("/(\.gif|\.jpg|\.png)$/", $img_file) ) {
                $images[] = $img_file;
            }
        }
        closedir($img_dir);
    }
    return $images;
}

function getRandomFromArray($ar) {
    $num = array_rand($ar);
    return $ar[$num];
}

?>

<!DOCTYPE html>
<html>
<head>
	<link rel="icon" type="image/png" href="fav.png">
	<link rel="stylesheet" href="./styles/index.css"/>
	<link rel="stylesheet" href="./styles/menu.css"/>
  <link rel="stylesheet" href="./styles/slides.css"/>
	<link rel="stylesheet" href="./fonts/css/font-awesome.min.css">

<title><?php echo $lang['PAGE_TITLE']; ?></title>
</head>

<body>

	<ul class="menu">
	    <a href="index.php"><li class="menu" id="logo"><img src="./images/logo.png" alt="logo"></li></a>
	    <li class="menu" id="first-entry"><a href="#"><?php echo $lang['MENU_LITT']; ?></a></li>
	    <li class="menu"><a href="#"><?php echo $lang['MENU_JEUN']; ?></a></li>
	    <li class="menu"><a href="#"><?php echo $lang['MENU_INT']; ?></a></li>
	    <li class="menu"><a href="#"><?php echo $lang['MENU_SCIENCES']; ?></a></li>
	    <li class="menu"><a href="#"><?php echo $lang['MENU_BD']; ?></a></li>
			<li class="menu"><a href="#">
				<form class="" action="index.html" method="post">
			<input type="text" name="search" value="<?php echo $lang['SEARCH']; ?>">

		  </form></a>
	    </li>
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
