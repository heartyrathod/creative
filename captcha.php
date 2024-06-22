<?php
session_start();
$ImageText1Small = imagecreate( 148, 16 );
$ImageText1Large = imagecreate( 148, 16 );
$ImageText2Small = imagecreate( 308, 40 );
$ImageText2Large = imagecreate( 308, 40 );
$ImageFinal = imagecreate( 150, 75 );

$backgroundColor1 = imagecolorallocate($ImageText1Small, 255,255,255);
$textColor1 = imagecolorallocate($ImageText1Small, 0,0,0);

$backgroundColor2 = imagecolorallocate($ImageText2Small, 255,255,255);
$textColor2 = imagecolorallocate($ImageText2Small, 0,0,0);
$random_num    = md5(random_bytes(64));
$captcha_code  = substr($random_num, 0, 6);
$_SESSION['CAPTCHA_CODE'] = $captcha_code;

imagestring( $ImageText1Small, 1, 1, 0, $captcha_code,  $textColor1 );
imagestring( $ImageText2Small, 5, 1, 0, $captcha_code,  $textColor2 );

imagecopyresampled($ImageText1Large, $ImageText1Small, 0, 0, 0, 0, 148, 16, 74, 8);
imagecopyresampled($ImageText2Large, $ImageText2Small, 0, 0, 0, 0, 308, 40, 154, 20);

$ImageText1Large = imagerotate ( $ImageText1Large, 20, $backgroundColor1 );
$ImageText2Large = imagerotate ( $ImageText2Large, 0, $backgroundColor2 );

$ImageText1W = imagesx($ImageText1Large);
$ImageText1H = imagesy($ImageText1Large);

$ImageText2W = imagesx($ImageText2Large);
$ImageText2H = imagesy($ImageText2Large);

// imagecopymerge($ImageFinal, $ImageText1Large, 350, 20, 0, 0, $ImageText1W, $ImageText1H, 100);
imagecopymerge($ImageFinal, $ImageText2Large, 20, 20, 0, 0, $ImageText2W, $ImageText2H, 100);


header( "Content-type: image/png" );
imagepng($ImageFinal);

imagecolordeallocate( $ImageText1, $textColor1 );
imagecolordeallocate( $ImageText2, $textColor2 );
imagedestroy($ImageText1);
imagedestroy($ImageText2);
  // session_start();

  // // Generate captcha code
  // $random_num    = md5(random_bytes(64));
  // $captcha_code  = substr($random_num, 0, 6);

  // // Assign captcha in session
  // $_SESSION['CAPTCHA_CODE'] = $captcha_code;

  // // Create captcha image
  // $layer = imagecreatetruecolor(168, 37);
  // $captcha_bg = imagecolorallocate($layer, 255, 255, 255);
  // imagefill($layer, 0, 0, $captcha_bg);
  // $captcha_text_color = imagecolorallocate($layer, 0, 0, 0);
  // imagestring($layer, 5, 55, 10, $captcha_code, $captcha_text_color);
  // header("Content-type: image/jpeg");
  // imagejpeg($layer);



?>