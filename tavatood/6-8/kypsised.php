<?php
session_start();
$suvalinenummer = rand(1000, 9999);
$_SESSION['captchatext'] = $suvalinenummer;
$plit = imagecreatetruecolor(100, 50);
$tagavarv = imagecolorallocate($plit, 255, 255, 255); //must
// valge
$vaev = imagecolorallocate($plit, 0, 0, 0); 
imagefilledrectangle($plit, 0, 0, 100, 50, $tagavarv);
imagestring($plit, 10, 20, 15,  $suvalinenummer, $vaev);
header('Content-type: image/png');
imagepng($plit);
imagedestroy($plit);
?>
