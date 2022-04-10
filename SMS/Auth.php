  
<?php
if(isset($_GET['id']))
{
       $link= mysqli_connect("localhost","root","","ttms");
        mysqli_query($link,"select * from tec_info where tec_email='$_GET[id]'");
        if(mysqli_affected_rows($link)>0)
        {
            echo "Email-Id Already Exist";
        }
        mysqli_close($link);
}
if(isset($_GET['id1']))
{
        $link= mysqli_connect("localhost","root","","ttms");
        mysqli_query($link,"select * from tec_info where tec_username='$_GET[id1]'");
        if(mysqli_affected_rows($link)>0)
        {
            echo "Username Already Exist";
        }
        mysqli_close($link);
}
?>