
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
   ?>

<h2>students<h2>
  <form action="process.php" method="post">
    <label for=""> Name<label>
      <input type="text" name="student_name" required><br>

      <label for="">Age <label>
        <input type="number" name="student_age" required><br>

        <label for=""> Gender<label>
          <select name="student_gender" required>
            <option value=""> Select Gender</option>
            <option value="M">Male</option>
            <option value="F"> Female</option>
          </select>
          <input type="submit" value="save" name="save_student">

  </form>


</body>
</html>
