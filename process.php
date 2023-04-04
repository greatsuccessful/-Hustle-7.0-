<?php
session_start();
?>

<?php
require "login.php";
require "include.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    




<?php

if(isset($_POST["save_user"]) ){
  $name = $_POST["user_name"];
  $email = $_POST["email"];
  $pass = $_POST["pass"];
  $confirm_pass = $_POST["confirm_pass"];


  if($pass !==$confirm_pass){
    
    exit ("<p> Password do not match! </p> <a href='register.php' > Go back</a>");
   
      }


  $user_exist=mysqli_query($db_connect, "SELECT * FROM users WHERE email= '$email'");
  if(mysqli_num_rows($user_exist) > 0){
    exit ("<p> user already exist</p> <a href='login.php' >login</a>");
  }


  $cryptic_pass=md5($pass);

$insert_user= mysqli_query($db_connect, "INSERT INTO users (name, email, password) VALUES('$name', '$email', '$cryptic_pass')");
if ($insert_user) {
header("location: all-student.php");
}

}
?>



<?php

//login user
if(isset($_POST["login_user"]) ){
    $email = $_POST["email"];
    $pass = $_POST["pass"];

    $user_exist= mysqli_query($db_connect, "SELECT * FROM users WHERE email= '$email'");
    
    if(!mysqli_num_rows($user_exist)){
        
        exit("<p> User not found </p> <p><a href='register.php'>Click here to Register</a></p>");
    }

$user_details=mysqli_fetch_assoc($user_exist);
$cryptic_pass=md5($pass);

if($cryptic_pass !==$user_details['password']){
exit("<p>Incorrect Password</p> <p><a href='login.php'>Go back</a>");
}



    $_SESSION["login"] = true;
    $_SESSION["id"] = $user_details['id'];

    header("Location: all-student.php");
    }

 ?>




