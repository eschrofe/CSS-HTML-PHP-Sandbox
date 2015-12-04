<?php
header('Content-Type: image/png');

$height = 1000;
$width  = 1000;

$im = @imagecreatetruecolor($width, $height)
        or die('not working!');

$color = imagecolorallocatealpha($im, $_GET['c1'], $_GET['c2'], $_GET['c3'], 100);

imagefill($im, 0, 0, $color);

imagepng($im);
imagedestroy($im);