<?php
session_start();
$suvalinenummer = rand(1000, 9999);
$_SESSION['captchatext'] = $suvalinenummer;
$plit = imagecreatetruecolor(100, 50);
$tagavarv = imagecolorallocate($im, 255, 255, 255); //must
// valge
$vaev = imagecolorallocate($im, 0, 0, 0); 
imagefilledrectangle($im, 0, 0, 100, 50, $tagavarv);
imagestring($im, 10, 20, 15,  $suvalinenummer, $vaev);
header('Content-type: image/png');
imagepng($plit);
imagedestroy($plit);
?>
