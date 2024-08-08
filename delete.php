<?php
    if (isset($_GET['roll'])) {
        $roll_no = $_GET['roll'];
        $con=new mysqli("localhost","root","","curd");
        $sql="delete from student where Roll=$roll_no";
        $con->query($sql);
        $con->close();
        header('Location: display.php');
        exit();
    }
?>