<?php
$msg="";
    if(isset($_GET['reg']))
    {
     $link= mysqli_connect("localhost","root","password","teacher");

        $qry="insert into tec_info values($_GET[txt_id],'$_GET[txt_name]','$_GET[txt_uname]','$_GET[txt_pwd]','$_GET[txt_email]',$_GET[txt_no])";

        mysqli_query($link,$qry);
        if(mysqli_affected_rows($link)>0)
        {
            $msg="<font color='green' size='5px'>Registration Done.....</font>";
        }
        else
        {
            $msg="<font color='red' size='5px'>Registration Fail.....</font>";
        }
        mysqli_close($link);
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Teacher Registration Form</title>
        <link href="assets/img/mwu-logo.png" rel= "icon"/>
        <script>
            temp=0;
            temp1=0;
            function CheckEmail()
            {
                temp=0;
                email=document.getElementById('email').value;
                ht=new XMLHttpRequest();
                ht.open("get","Auth.php?id="+email,true);
                ht.send();
                ht.onreadystatechange=function() {
                    if(ht.readyState==4 && ht.status==200)
                    {
                        document.getElementById("d1").innerHTML=ht.responseText;
                         if(ht.responseText=="Email-Id Already Exist")
                        temp=1;
                        
                    }
                }
             
            }
            function CheckUsername()
            {
                temp1=0;
                uname=document.getElementById('uname').value;

                ht1=new XMLHttpRequest();
                ht1.open("get","Auth.php?id1="+uname,true);
                ht1.send();
                ht1.onreadystatechange=function() {
                    if(ht1.readyState==4 && ht1.status==200)
                    {
                        document.getElementById("d2").innerHTML=ht1.responseText;
                        if(document.getElementById("d2").innerHTML=="Username Already Exist")
                        {temp1=1; }
                        
                    }
                }

            }
            function validate()
            {
                if(temp==1)
               return false;
           if(temp1==1)
               return false;
           else 
               return true;
            }
        </script>
        <style>
        h1 {
            color: rgba(28, 43, 75, 1);
            font-family: Arial, Helvetica, sans-serif;
            text-align: center;
        }

        img {
            display: block;
            margin: auto;
        }

        form {
            background-color: rgba(28, 43, 75, 1);
            color: white;
            border: 1px solid black;
            padding: 10px;
            font-family: Arial, Helvetica, sans-serif;
            margin: auto; 
            width: 98%;
        }

        input,select {
            padding: 3px;
            margin: auto;
        }


        button {
            width: 70px;
            height: 28px;
            width: 80px;
            border: 1px solid black;
            font-weight: 650;
            font-size: small;
            /* cursor: pointer; */
        }
        #textalign{
            text-align: center;
        }

        /* td{
   style="height: 45px;" 
}      */
    </style>

    </head>
    <body>
         
         
          <img src="assets/img/mwu-logo.png" alt="icon" style="width:110px" align="center"/>
        <h2 style="font-size: 30px; color: rgba(28, 43, 75, 1); font-family: Time In Roman; text-align: center"><br>Teacher Registration Form<br></h2>
        <hr size="4" color="rgba(28, 43, 75, 1)"/><br>
        <div align="center"><form method="get" onsubmit="return validate()" >
                <table width="50%">
                <tr>
                    <td><label>Teacher's ID</label></td>
                    <td><input class="mystyle" type="text" name="txt_id" value="" required="" /></td>
                </tr>
                <tr>
                    <td><label>Teacher's Name</label></td>
                    <td><input class="mystyle" type="text" name="txt_name" value="" required="" /></td>
                </tr>
                <tr>
                    <td><label>Username</label></td>
                    <td><input class="mystyle" id="uname" type="text" name="txt_uname" value="" onchange="CheckUsername()" required="" /><br><div id="d2" style="color:red"></div></td>
                </tr>
                <tr>
                    <td><label>Password</label></td>
                    <td><input class="mystyle" type="password" name="txt_pwd" value="" required="" /></td>
                </tr>
                <tr>
                    <td><label>Email ID</label></td>
                    <td><input class="mystyle" id="email" type="email" name="txt_email" onchange="CheckEmail()" value="" required="" /><br><div id="d1" style="color:red"></div></td>
                </tr>
                <tr>
                    <td><label>Phone Number</label></td>
                    <td><input class="mystyle" type="text" name="txt_no" value="" required="" /></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input class="style1" type="submit"  value="Register" name="reg"/></td>
                </tr>
                  <tr>
                      <td colspan="2"><?php echo $msg; ?></td>
                </tr>
            </table>
            </form></div>
    </body>
</html>