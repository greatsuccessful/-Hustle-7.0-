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
    
    <label for=""> Name<label>
      <input type="text" name="user_name" required><br><br>

      <label for="">Email <label>
        <input type="text" name="email" required><br><br>

        <label for="">Password <label>
        <input type="password" name="pass"required><br><br>

        <label for="">Confirm Password <label>
        <input type="password" name="confirm_pass" required><br><br>

          <input type="submit" value="Register" name="save_user">
          <p> Already have an account? <a href='login.php'> Login here </a></p>

  </form>


</body>
</html>
