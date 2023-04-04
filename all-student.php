

<?php
require "sessionstart.php";
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
include "include.php";
$class_list=mysqli_query($db_connect, 'SELECT * FROM class_list');

      ?>
      <br>
      
      <a href="logout.php"> Logout</a>
      <br><br>
      <a href="create-student.php"> Add New student</a>


      <h2> All Students</h2>
            <table>
        <thead>
          <td> S/N</td>
        <td> Name</td>
        <td> Age</td>
        <td> Gender</td>
        <td> Action</td>
      </thead>


<tbody>

<?php  foreach ($class_list as $student): ?>
<tr>
  <td> <?=$student['id'] ?>  </td>
  <td> <?=$student['name'] ?>  </td>
  <td> <?=$student['age'] ?>  </td>
  <td> <?=$student['gender'] ?>  </td>

  <td>
 


</td>
</tr>

<?php endforeach; ?>

</tbody>
</table>
