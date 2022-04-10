<?php
include 'connection.php';
$id = $_GET['name'];
$q = mysqli_query(mysqli_connect("localhost", "root", "", "ttms"),
    "DELETE FROM subjects WHERE subject_code = '$id' ");
if ($q) {
    $message = "Deleted Successfully.";
    echo "<script type='text/javascript'>alert('$message'); window.location.href = \"addsubjects.php\";</script>";
    //header("Location:addsubjects.php");

} else {
    $message = "Deletion failed.";
    echo "<script type='text/javascript'>alert('$message'); window.location.href = \"addsubjects.php\";</script>";
}
?>

