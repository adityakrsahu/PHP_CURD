<?php
if (isset($_POST['submit'])) {
  $roll_no = $_POST['roll'];
  $name = $_POST['name'];
  $email = $_POST['email'];
  $mobile = $_POST['mobile'];
  $con = new mysqli("localhost", "root", "", "curd");
  $sql = "update student set Name='$name',Email='$email',Mobile='$mobile' where Roll=$roll_no";
  $con->query($sql);
  $con->close();
  echo $roll_no;
  echo "<script>";
  echo "alert('Data Updated Successfully')";
  echo "</script>";
  header('Location: display.php?status=success');
  }
if (isset($_GET['roll'])) {
  $roll_no = $_GET['roll'];
  $con = new mysqli("localhost", "root", "", "curd");
  $sql = "select * from student where Roll=$roll_no";
  $student = $con->query($sql);
  $con->close();
  foreach ($student as  $i) 
  {
    $roll = $i['Roll'];
    $name = $i['Name'];
    $email = $i['Email'];
    $mobile = $i['Mobile'];
  }

}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <?php include 'header.php'; ?>
  <div class="custom-container">
    <h2>Update Form</h2>
    <form action="update.php" method="POST" class="custom-form">
      <div class="form-group">
        <label for="rollNo">Roll No:</label>
        <input type="text" id="rollNo" name="roll" class="custom-input" required value="<?php echo $roll ?>" readonly>
      </div>
      <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" class="custom-input" required value="<?php echo $name ?>">
      </div>
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" class="custom-input" required value="<?php echo $email ?>">
      </div>
      <div class="form-group">
        <label for="mobile">Mobile:</label>
        <input type="tel" id="mobile" name="mobile" class="custom-input" pattern="[0-9]{10}" required value="<?php echo $mobile ?>">
        <small class="custom-info">Format: 10 digits without spaces or dashes</small>
      </div>
      <button type="submit" class="custom-button" name="submit">Update</button>
    </form>
  </div>
  <?php include 'footer.php'; ?>
</body>

</html>