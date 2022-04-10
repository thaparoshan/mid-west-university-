<?php
include 'connection.php';
if (isset($_POST['SN']) && isset($_POST['EN']) && isset($_POST['SB']) && isset($_POST['SP']) && isset($_POST['SE'])) {
    $s_name = $_POST['SN'];
    $sid = $_POST['EN'];
    $branch = $_POST['SB'];
    $phno = $_POST['SP'];
    $email = $_POST['SE'];
	$y=4;
	$s=2;
	$pass="FST";
	$R="N";
	$N = "N";
//	echo "<script type ='text/javascript'> alert('$s_name' + ' ' + '$sid' + ' ' + '$branch' + ' ' + '$phno' + ' ' + '$email' + ' ' + '$y' + ' ' + '$s' + ' ' + '$pass' + '' + '$N');</script>";
} else {
    $message = "Some values are missing. Please add again";
    die();
    echo "<script type='text/javascript'>alert('$message'); window.location.href= \"addstudent.php\"</script>";
}
$q = mysqli_query(mysqli_connect("localhost", "root", "", "ttms"), "INSERT into student values ('$sid','$s_name','$y','$s','$branch','$pass','$phno','$email','$R','$N')");
//echo "<script type='text/javascript'>alert('$q');</script>";
if ($q) {
    $message = "Student added.";
    echo "<script type='text/javascript'>alert('$message'); window.location.href= \"addstudent.php\"</script>";
   // header("Location:addstudent.php");
} else {
    $message = "Student not added. \\n Try again";
    echo "<script type='text/javascript'>alert('$message'); window.location.href= \"addstudent.php\"</script>";
}

?>