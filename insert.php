<?php
if(isset($_POST['submit'])){
  $roll=$_POST['rollNo'];
  $name = $_POST['name'];
  $email = $_POST['email'];
  $mobile=$_POST['mobile'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="css/styles.css">
</head>
<body>
<?php include 'header.php'; ?>
<?php
if(isset($_POST['submit'])){
  $con=new mysqli("localhost","root","","curd");
  $sql="insert into student(Roll,Name,Email,Mobile) values('$roll','$name','$email','$mobile')";
  $con->query($sql);
  $con->close();
  echo "<script>";
    echo "alert('Data Inserted Successfully')";
  echo "</script>";
  
}
?>
<div class="custom-container">
  <h2>Student Information Form</h2>
  <form action="insert.php" method="POST" class="custom-form">
    <div class="form-group">
      <label for="rollNo">Roll No:</label>
      <input type="text" id="rollNo" name="rollNo" class="custom-input" required>
    </div>
    <div class="form-group">
      <label for="name">Name:</label>
      <input type="text" id="name" name="name" class="custom-input" required>
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" id="email" name="email" class="custom-input" required>
    </div>
    <div class="form-group">
      <label for="mobile">Mobile:</label>
      <input type="tel" id="mobile" name="mobile" class="custom-input" pattern="[0-9]{10}" required>
      <small class="custom-info">Format: 10 digits without spaces or dashes</small>
    </div>
    <button type="submit" class="custom-button" name="submit">Submit</button>
  </form>
</div>
<?php include 'footer.php'; ?>
</body>
</html>
