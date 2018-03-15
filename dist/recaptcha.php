<!DOCTYPE html>
<html lang="en">
  <head>
    <title>How to Integrate Google “No CAPTCHA reCAPTCHA” on Your Website</title>
  </head>
 
  <body>
  
 
    <form action="" method="post">
 
      <label for="name">Name:</label>
      <input name="name" required><br />
 
      <label for="email">Email:</label>
      <input name="email" type="email" required><br />
 
      <div class="g-recaptcha" data-theme="dark" data-sitekey="6Lcs4UwUAAAAADAABPNEHRZURHcXxbIryiRYgIKA"></div>
 
      <input type="submit" value="Submit" />
 
    </form>

    
 
    <!--js-->
    <script src='https://www.google.com/recaptcha/api.js'></script>
 
  </body>
</html>