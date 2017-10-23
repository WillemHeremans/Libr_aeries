<!DOCTYPE html>
<html>
<head>
	<link rel="icon" type="image/png" href="fav.png">

	<link rel="stylesheet" href="./styles/menu.css"/>
<title></title>

</head>

<body>

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

<img src="<?php echo $path . $img ?>" alt="" />

</body>
</html>
