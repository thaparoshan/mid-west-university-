<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
 <meta charset="utf-8"/>

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <meta name="description" content=""/>
    <meta name="author" content=""/>
    <title>Student Management System</title>
	<link href="assets/img/mwu-logo.png" rel= "icon"/>
    <!-- BOOTSTRAP CORE STYLE CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet"/>
    <!-- FONT AWESOME CSS -->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet"/>
    <!-- FLEXSLIDER CSS -->
    <link href="assets/css/flexslider.css" rel="stylesheet"/>
    <!-- CUSTOM STYLE CSS -->
    <link href="assets/css/style.css" rel="stylesheet"/>
    <!-- Google	Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'/>

</head>
<body>
<div class="navbar navbar-inverse navbar-fixed-top " id="menu">
    <div class="container">
        <div align="center">
		    <img src="assets/img/mwu-logo.png" alt="icon" style="width:86px" align="left"/> 	
			<h3 align="center">मध्य पश्चिमाञ्चल विश्व विद्यालय</h3>
            <h3 align="center">MID-WESTERN UNIVERSITY</h3>

         <!--<ul class="navbar-nav" style="list-style-type: none;"> --> 
         <ul class="nav nav-pills"> 
          <li class="nav-item">
            <a class="nav-link js-scroll active" href="home.html">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="about.html">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="service.html">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="notes.php">Notes</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="blog.html">Blog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="notice.html">Notice</a>
          </li>
        </ul>
        </div>
    </div>
</div>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators" style="margin-bottom: 220px;">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
        <li data-target="#myCarousel" data-slide-to="4"></li>
        <li data-target="#myCarousel" data-slide-to="5"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
        <div class="item">
            <img src="assets/img/mwu.jpg" alt="Failed to load">
        </div>

        <div class="item">
            <img src="assets/img/main1.jpg" alt="Failed to load">
        </div>

        <div class="item  active">
            <img src="assets/img/main1.jpg" alt="Failed to load">
        </div>

        <div class="item">
            <img src="assets/img/main1.jpg" alt="Failed to load">
        </div>

        <div class="item">
            <img src="assets/img/main1.jpg" alt="Failed to load">
        </div>

        <div class="item">
            <img src="assets/img/f1.jpg" alt="Failed to load">
        </div>

    </div>
</div>
<div align="center" STYLE="margin-top: 60px">
    <button data-scroll-reveal="enter from the bottom after 0.2s"
            id="teacherLoginBtn" class="btn btn-info btn-lg">TEACHER LOGIN
    </button> 
    <button data-scroll-reveal="enter from the bottom after 0.2s"
            id="adminLoginBtn" class="btn btn-success btn-lg">ADMIN LOGIN
    </button>
	<button data-scroll-reveal="enter from the bottom after 0.2s"
            id="studentLoginBtn" class="btn btn-info btn-lg" >STUDENT LOGIN
    </button> 
</div>
<br>
<div align="center">
    <form name="semester_selection" data-scroll-reveal="enter from the bottom after 0.2s" action="studentvalidation.php" method="post" onsubmit = "return validation()">
        <select id="select_semester" name="select_semester" class="list-group-item" style="width:200px" required>
            <option selected disabled>Select semester</option>
			<option value="All">Get all semesters</option>
            <?php
			if(date("Y")%1 === 0){
			   if(date("m")>= "01" && date("m")< "08"){
                $s="Select * from semesters where semid in(1,3,5,7)";			   
			   }
			   else{
				   $s="Select * from semesters where semid not in(1,3,5,7)";
			   }
			}
			else
			{
				if(date("m")>="01" && date("m")<"08"){
                $s="Select * from semesters where semid in(2,4,6,8)";			   
			   }
			   else{
				   $s="Select * from semesters where semid not in(2,4,6,8)";
			   }
			}
            $q = mysqli_query(mysqli_connect("localhost", "root", "", "ttms"),$s);
                
            while ($row = mysqli_fetch_assoc($q)) {
                echo " \"<option value=\"{$row['semid']}\">{$row['semid']}</option>\"";
            }
            ?>
        </select>
		<button type="submit" class="btn btn-success btn-lg" style="margin-top: 10px; margin-bottom: 20px ;width:200px">Semester TimeTable</button>
    </form>
</div>
<!-- The Modal -->
<div id="myModal" class="modal">

    <!-- Modal content -->
    <div class="modal-content">
        <div class="modal-header" style="background-color:rgba(28, 43, 75, 1)">
            <span class="close">&times</span>
            <h2 id="popupHead">Modal Header</h2>
        </div>
        <div class="modal-body" id="LoginType">
            <!--Admin Login Form-->
            <div style="display:none" id="adminForm">
                <form action="adminFormvalidation.php" method="POST">
                    <div class="form-group">
                        <label for="adminname">Username:</label>
                        <input type="text" class="form-control" id="adminname" name="UN" placeholder="Username ...">
                    </div>
                    <div class="form-group">
                        <label for="password">Password:</label>
                        <input type="password" class="form-control" id="password" name="PASS"
                               placeholder="Password ...">
                    </div>
                    <div align="Center" style="margin-bottom : 10px">
                        <input type="submit" class="btn btn-default" name="LOGIN" value="LOGIN" style="background-color: #4CAF50;color:white">
                    </div>
                </form>
            </div>
        </div>
        <!--Faculty Login Form-->
        <div style="display:none;" id="facultyForm" >
            <form action="facultyformvalidation.php" method="POST" style="overflow: hidden">
            <label for="facultyno" style="margin-left:5%">Faculty No:</label>
                <div class="form-group" align="center">
                    <input type="text" class="form-control" id="facultyno" name="FN" placeholder="Faculty No. ..." style="width:90%">
                </div>
                <div  style="margin-bottom : 10px" align="center">
                    <button  type="submit" class="btn btn-default" name="LOGIN" style="background-color: #4CAF50;color:white;">LOGIN</button>
                    
                    <a class="btn btn-default" href="RegisterNewTeacher.php" style="background-color: #BE670F;color:white;">REGISTER NEW TEACHER</a>
                    
                </div>
            </form>
        </div>
		<!--Student Login Form-->
		<div style="display:none" id="studentForm">
                <form action="studentFormvalidation.php" method="POST">
                <label for="studentno" style="margin-left:5%" >Enrollment No:</label>
                    <div class="form-group" align="center">
                        <input type="text" class="form-control" id="studentno" name="SN" placeholder="Enrollmentno ..." style="width:90%">
                    </div>
                    <label for="spassword" style="margin-left:5%">Password:</label>
                    <div class="form-group" align="center">
                        <input type="password" class="form-control" id="spassword" name="SPASS"
                               placeholder="Password ..." style="width:90%">
                    </div>
                    <div align="Center" style="margin-bottom : 10px">
                        <input type="submit" class="btn btn-default" name="LOGIN" value="LOGIN" style="background-color: #4CAF50;color:white;">
                        <a class="btn btn-default" href="RegisterNewStudent.php" style="background-color: #BE670F;color:white;">REGISTER NEW STUDENT</a>
                    </div>
                </form>
        </div>
    </div>
</div>


<script>
    
    function validation()
    {
        if(document.semester_selection.select_semester.selectedIndex == 0)
        { 
            alert("Please select semester");
            document.semester_selection.select_semester.focus();
            return false;
        }
        return true;
    }
    // Get the modal
    var modal = document.getElementById('myModal');

    // Get the button that opens the modal
    var teacherLoginBtn = document.getElementById("teacherLoginBtn");
    var adminLoginBtn = document.getElementById("adminLoginBtn");
	var studentLoginBtn = document.getElementById("studentLoginBtn");
    var heading = document.getElementById("popupHead");
    var facultyForm = document.getElementById("facultyForm");
    var adminForm = document.getElementById("adminForm");
	var studentForm = document.getElementById("studentForm");
    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks the button, open the modal
    adminLoginBtn.onclick = function () {
        modal.style.display = "block";
        heading.innerHTML = "Admin Login";
        adminForm.style.display = "block";
        facultyForm.style.display = "none";
		studentForm.style.display = "none";

    }
    teacherLoginBtn.onclick = function () {
        modal.style.display = "block";
        heading.innerHTML = "Faculty Login";
        facultyForm.style.display = "block";
        adminForm.style.display = "none";
		studentForm.style.display = "none";


    }
	studentLoginBtn.onclick = function () {
        modal.style.display = "block";
        heading.innerHTML = "Student Login";
        adminForm.style.display = "none";
        facultyForm.style.display = "none";
		studentForm.style.display = "block";

    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function () {
        modal.style.display = "none";
        adminForm.style.display = "none";
        facultyForm.style.display = "none";
		studentForm.style.display = "none";

    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function (event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script>
<!--HOME SECTION END-->
<!--HOME SECTION TAG LINE END-->

<div id="faculty-sec" style="background-color:rgba(28, 43, 75, 1)">
    <div class="container set-pad">
        <div class="row text-center">
            <div class="col-lg-8 col-lg-offset-2 col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                <h1 data-scroll-reveal="enter from the bottom after 0.1s" class="header-line">OUR FACULTY </h1>

            </div>

        </div>
        <!--/.HEADER LINE END-->

        <div class="row">


            <div class="col-lg-4  col-md-4 col-sm-4" data-scroll-reveal="enter from the bottom after 0.4s">
                <div class="faculty-div">
                    <img src="assets/img/faculty/donk.jpg" class="img-rounded"/>
                    <h3 align="center">ABC</h3>
                    <hr/>
                    <h4 align="center">Dean<br/>Engineering Department</h4>

                </div>
            </div>
            <div class="col-lg-4  col-md-4 col-sm-4" data-scroll-reveal="enter from the bottom after 0.5s">
                <div class="faculty-div">
                    <img src="assets/img/faculty/princi.jpg" class="img-rounded"/>
                    <h3 align="center">Er.Sonalal Yadav</h3>
                    <hr/>
                    <h4 align="center">Chief<br/> Engineering Department</h4>

                </div>
            </div>
            <div class="col-lg-4  col-md-4 col-sm-4" data-scroll-reveal="enter from the bottom after 0.6s">
                <div class="faculty-div">
                    <img src="assets/img/faculty/cat.jpg" class="img-rounded"/>
                    <h3 align="center">Er.Parkash Panday</h3>
                    <hr/>
                    <h4 align="center">ICH<br/>Computer Engineering Department</h4>

                </div>
            </div>
        </div>
    </div>
</div>

<!--second faculty-->
<div id="faculty-sec" style="background-color:rgba(28, 43, 75, 1)">
    <div class="container set-pad">
        <div class="row text-center">
            <div class="col-lg-8 col-lg-offset-2 col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
            </div>

        </div>
        <!--/.HEADER LINE END-->

        <div class="row">


            <div class="col-lg-4  col-md-4 col-sm-4" data-scroll-reveal="enter from the bottom after 0.4s">
                <div class="faculty-div">
                    <img src="assets/img/faculty/donk.jpg" class="img-rounded"/>
                    <h3 align="center">ABC</h3>
                    <hr/>
                    <h4 align="center">ICH<br/>Civil Engineering Department</h4>

                </div>
            </div>
            <div class="col-lg-4  col-md-4 col-sm-4" data-scroll-reveal="enter from the bottom after 0.5s">
                <div class="faculty-div">
                    <img src="assets/img/faculty/princi.jpg" class="img-rounded"/>
                    <h3 align="center">ABC</h3>
                    <hr/>
                    <h4 align="center">ICH<br/>Hydropower Engineering Department</h4>

                </div>
            </div>
            <div class="col-lg-4  col-md-4 col-sm-4" data-scroll-reveal="enter from the bottom after 0.6s">
                <div class="faculty-div">
                    <img src="assets/img/faculty/cat.jpg" class="img-rounded"/>
                    <h3 align="center">ABC</h3>
                    <hr/>
                    <h4 align="center">ICH<br/>Electronic Engineering Department</h4>

                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row set-row-pad">
        <div class="col-lg-4 col-md-4 col-sm-4   col-lg-offset-1 col-md-offset-1 col-sm-offset-1 "
             data-scroll-reveal="enter from the bottom after 0.4s">

            <h2><strong>Our Location </strong></h2>
            <hr/>
            <div>
                <h4>Find Us Anywhere,
                </h4>
                <h4> Birendranagar, Surkhet</h4>
                <h4><strong>Call:</strong> +977-083-524681</h4>
                <h4><strong>Email: </strong> info@mwu.edu.np</h4>
            </div>


        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-sm-4  col-lg-offset-1 col-md-offset-1 col-sm-offset-1 col-sm-offset-1"
             data-scroll-reveal="enter from the bottom after 0.4s">

            <h2><strong>Social Conectivity </strong></h2>
            
            <div>
                <a href="https://www.facebook.com/mwuskt/"> <img src="assets/img/Social/facebook.png" alt=""/> </a>
                <a href="https://www.mwu.edu.np/"> <img src="assets/img/Social/google-plus.png" alt=""/></a>
                <a href="https://twitter.com/MWUNepal"> <img src="assets/img/Social/twitter.png" alt=""/></a>
                <a href="https://www.youtube.com/channel/UCqE7lzRn0WJvKc5iccpecPQ"> <img src="assets/img/Social/youtube.png" alt=""style="size: height:80px; width:80px; float: up;"></a>
                <a href="https://www.instagram.com/?hl=en"> <img src="assets/img/Social/insta.png" alt=""style="size: height:80px; width:80px; float: up;"></a>
                <a href="https://https://np.linkedin.com/"> <img src="assets/img/Social/linkedin.png" alt=""style="size: height:80px; width:80px; float: up;"></a>
                <a href="https://https://www.quora.com/"> <img src="assets/img/Social/quora.png" alt=""style="size: height:90px; width:90px; float: up;"></a>
                <a href="https://www.whatsapp.com/"> <img src="assets/img/Social/whatsapp.png" alt=""style="size: height:80px; width:80px; float: up;"></a>
            </div>
        </div>


    </div>
</div>
<!-- CONTACT SECTION END-->
<div id="footer">
    &copy 2021 | All Rights Reserved |  <a href="http://binarytheme.com" style="color: #fff" target="_blank">Design by :MWU GROUP</a>
</div>
<!-- FOOTER SECTION END-->


<!--  Jquery Core Script -->
<script src="assets/js/jquery-1.10.2.js"></script>
<!--  Core Bootstrap Script -->
<script src="assets/js/bootstrap.js"></script>
<!--  Flexslider Scripts -->
<script src="assets/js/jquery.flexslider.js"></script>
<!--  Scrolling Reveal Script -->
<script src="assets/js/scrollReveal.js"></script>
<!--  Scroll Scripts -->
<script src="assets/js/jquery.easing.min.js"></script>
<!--  Custom Scripts -->
<script src="assets/js/custom.js"></script>
</div>
</body>
</html>
