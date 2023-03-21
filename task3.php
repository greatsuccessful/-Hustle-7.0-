<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!--TASK Write a function to multiply
three numbers; let the last number be a default value of 5;
then return the result. Include a new file to the file with
 the function logic and connect your mysql database in the
  new file Push Code to Github and submit link-->


<?php
function multiply($num1, $num2, $num3=5){
  $answer= $num1 * $num2 * $num3;
  return "$answer";
}
echo multiply(2, 3);
 ?>

<?php
include "include.php";
 ?>
 <p> hello welcome back</p>

 <?php
$insert_data= mysqli_query($db_connect, "INSERT INTO students(id,name,age,gender) VALUES( '100','Great', '20', 'm')");
if ($insert_data) {
echo "Data inserted successfully";
}
 ?>

<br> <br> <br>
<footer> Thank you sidehutle for this lessions copyright &copyright GREAT</footer>
</body>
</html>
