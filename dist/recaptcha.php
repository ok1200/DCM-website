<?php
  
  if(!empty($_POST)){
    
    $name = $_POST['name'];
    $password = $_POST['password'];
    $captcha = $_POST['g-recaptcha-response'];
    
    $secret = '6LdA8EwUAAAAAB3sKX8jg2kf4Mm4Sp-5Q1gm2a3A';
    
    if(!$captcha){
 
      echo "Por favor verifica el captcha";
      
      } else {
      
      $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$captcha");
      
      $arr = json_decode($response, TRUE);
      
      if($arr['success'])
      {
        echo '<h2>La buena humano</h2>';
        } else {
        echo '<h3>Quieto ahí robot! </h3>';
      }
    }
  }
?>
 
<html>
  <head>
    <title>Google Recapcha</title>
    
    <script src='https://www.google.com/recaptcha/api.js'></script>
    
  </head>
  <body>  
    <form id="form" action="" method="POST">
      Usuario: <input type="text" name="name">
      <br><br>
      Password: <input type="password" name="password">
      <br><br>
      <div class="g-recaptcha" data-sitekey="6LdA8EwUAAAAAE6G3sOPZFo5FALTyNQDyJrL5GjC"></div>
      <br>
      <input type="submit" name="login" value="Login">
      
    </form>
  </body>
</html>