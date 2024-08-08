<?php 
$roll=$_POST['roll'];
$con=new mysqli("localhost","root","","curd");
$sql="select * from student where Roll=$roll";
$students=$con->query($sql);
$con->close();
if(!$students){
    echo "No record found";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <?php include 'header.php'; ?>
    <div class="outer-display">
        <div class="inner-display">
            <table class="table">
                <thead>
                    <tr>
                        <th>Roll No</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Mobile No</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($students as $student): ?>
                        <tr>
                        <td data-label="Roll No"><?php echo $student['Roll']; ?></td>
                        <td data-label="Name"><?php echo $student['Name']; ?></td>
                        <td data-label="Email"><?php echo $student['Email']; ?></td>
                        <td data-label="Mobile No"><?php echo $student['Mobile']; ?></td>
                        <td data-label="Actions" class="edit-delete-btn">
                            <a href="update.php?roll=<?php echo $student['Roll']; ?>" class="edit">
                                <i class='bx bxs-edit-alt edit-btn'></i>
                            </a>
                            <a href="" class="trash">
                                <i class='bx bxs-trash-alt delete-btn'></i>
                            </a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                    <?php if (empty($students)): ?>
                        <tr><td colspan="5">No records found</td></tr>
                    <?php endif; ?>  
                </tbody>
            </table>
        </div>
    </div>
    <?php include 'footer.php'; ?>

    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js" />
</body>

</html>
