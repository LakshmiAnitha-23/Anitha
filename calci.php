<?xml version = "1.0" encoding = "utf-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1 //EN"
 "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns = "http://www.w3.org/1999/xhtml">
 <head>
  <title>Date () in PHP</title>
 </head>
 <body>
	<?php
	echo '<p> Tell you a secret. My birthday is '. date( 'F jS, Y' , mktime(0,0,0,7,22,1991) ) ."</p>";
	echo '<p> Today is: '. date('Y-m-d') ."</p>"; 


	//birth date in terms of seconds since the epoch 
	$birthtime=mktime(0, 0, 0, 22, 7, 1991); 
	//now in terms of seconds since the epoch 
	$now=time(); 

	$age=$now-$birthtime;  //age in seconds
	$age=$age/60;  //age in minutes 
	$age=$age/60;  //age in hours 
	$age=$age/24;  //age in days 
	$age=$age/356; //age in years
	 
	
	echo 'You are ' . floor($age) . ' .';
	
	?>
 </body>
</html>