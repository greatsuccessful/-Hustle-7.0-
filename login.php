
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTRATION</title>
</head>
<body>
    
<?php
  include "include.php";
   ?>

<form action="process.php" method="post">
    
    
      <label for="">Email <label>
        <input type="text" name="email" required><br><br>

        <label for="">Password <label>
        <input type="password" name="pass" required><br><br>     

          <input type="submit" value="Login" name="login_user"> <br> <br>
          <p> Don't have an account? <a href="register.php">Register </a></p>
  </form>


</body>
</html>
