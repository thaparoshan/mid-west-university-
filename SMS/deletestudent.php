<?php
include 'connection.php';
$id = $_GET['name'];
$q = mysqli_query(mysqli_connect("localhost", "root", "", "ttms"),
    "UPDATE student set DELETED= \"Y\" WHERE sid = '$id' ");
if ($q) {
    $message = "Deleted Successfully.";
    echo "<script type='text/javascript'>alert('$message'); window.location.href = \"addstudent.php\";</script>";
    //header("Location:addstudent.php");

} else {
    $message = "Deletion failed.";
    echo "<script type='text/javascript'>alert('$message'); window.location.href = \"addstudent.php\";</script>";
}
?>

