<?php
$my_img = imagecreate( 600, 100 );
$background = imagecolorallocate( $my_img, rand(100,255), rand(100,255), rand(100,255) );
$text_colour = imagecolorallocate( $my_img, 0, 0, 0 );
$line_colour = imagecolorallocate( $my_img, rand(100,255), rand(100,255), rand(100,255) );
$left_circle = imagefilledarc($my_img,  100,  50,  75,  75,  0, 360, $line_colour,IMG_ARC_PIE);
$right_circle = imagefilledarc($my_img, 500,  50,  75,  75,  0, 360, $line_colour,IMG_ARC_PIE);
imagestring( $my_img, 5, 200, 40, "Contoso Costume Rentals", $text_colour );
sleep(rand(1,20));

header( "Content-type: image/png" );
imagepng( $my_img );
imagecolordeallocate( $line_color );
imagecolordeallocate( $text_color );
imagecolordeallocate( $text_color );
imagecolordeallocate( $left_circle );
imagecolordeallocate( $right_circle );
imagedestroy( $my_img );
?>