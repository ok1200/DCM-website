<?php 
  $recaptcha = $_POST['g-recaptcha-response'];
  if ($recaptcha != ''){
  	$secret = "6LdA8EwUAAAAAB3sKX8jg2kf4Mm4Sp-5Q1gm2a3A";
  	$ip = $_SERVER['REMOTE_ADDR'];
  	$var = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$recaptcha&remoteip=$ip");
  	$array = json_decode($var,true);
  	if($array['success']){
  		echo "Eres humano, la buena";
  	} else {
  		echo "Quieto ahí robot Pichuria";
  	}
  	
  } else {
  	echo "Rellene todos los campos";
  }
  

 ?>