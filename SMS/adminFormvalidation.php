<?php
include 'connection.php';
if (isset($_POST['UN']) && isset($_POST['PASS'])) {
    $id = $_POST['UN'];
    $password = $_POST['PASS'];
} else {
    die();
}
$q = mysqli_query(mysqli_connect("localhost", "root", "", "ttms"), "SELECT name FROM admin WHERE name = '$id' and password = '$password' ");
if (mysqli_num_rows($q) == 1) {
    header("Location:addteachers.php");
} else {
    $message = " Invalid Username or Password.\\nTry again.";
    echo "<script type='text/javascript'>alert('$message'); window.location.href=\"index.php\";</script>";

}
?>