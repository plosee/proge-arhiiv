<?php
session_start();
$random_number = rand(1000, 9999);
$_SESSION['captchatext'] = $random_number;
$im = imagecreatetruecolor(100, 50);
$bg_color = imagecolorallocate($im, 255, 255, 255); //must
// valge
$text_color = imagecolorallocate($im, 0, 0, 0); 
imagefilledrectangle($im, 0, 0, 100, 50, $bg_color);
imagestring($im, 10, 20, 15,  $random_number, $text_color);
header('Content-type: image/png');
imagepng($im);

imagedestroy($im);
?>
