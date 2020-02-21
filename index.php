

    <?php
    include('AND/php/login.php'); // Includes Login Script
    if(isset($_SESSION['username']) && $_SESSION["user"]=="fac"){
		header("location: AND/php/profile_fac.php"); // Redirecting To Profile Page
    }
	if(isset($_SESSION['username']) && $_SESSION["user"]=="admin"){
		header("location: AND/php/profile_admin.php"); // Redirecting To Profile Page
    }
	if(isset($_SESSION['username']) && $_SESSION["user"]=="stud"){
		header("location: AND/php/profile_stu.php"); // Redirecting To Profile Page
    }
	if($_SESSION['val']==1){
        echo "<script>alert('Either Username or Password is invalid!!! ')</script>";
    }
    ?>
<html>

<head>

<title>Attendance IIITBH

</title>

<link rel="icon" href="AND/img/iiitbh_logo.png" type="image/icon type">
<link rel="stylesheet" type="text/css" href="AND/ext/login.css">
<!--<script type="text/javascript" src="AND/ext/usr_select.js"></script>-->
</head>

<body background="AND/img/back.jpg" style="background-repeat: no-repeat;
  background-size: 1320px 700px; opacity: 10 " >


<center>
<h1>Indian Institute Of Information Technology, Bhagalpur</h1>

<a href="index.php">

<img src="AND/img/iiitbh_logo.png" alt="Indian Institute Of Information Technology, Bhagalpur" height="200" width="200">

</img>

</a>

<form action="" method = "post">

<div class="container">


<input type="text" placeholder="Enter Username" name="username" required>
 
</div>
<div>
<input type="password" placeholder="Enter Password" name="password" required>
</div>
<div>
<input type="radio" name="user" value="fac" checked ><b><i>
<a style="color: #f1c40f ">Faculty</a></b></i>
<input type="radio" name="user" value="stud">
<a style="color:#f1c40f"><b ><i>Student</b></i></a>
<input type="radio" name="user" value="admin">
<a style="color:#f1c40f"><b ><i>Admin</b></i></a>
</div>
<div>
   
<input name="submit" type="submit" value=" Login "><br>
<a href="/pass/forgot_password.php">forgot passowrd</a><br>
<a href="/pass/signup.php">New User?? Sign Up</a>
<span><?php echo $error; ?></span>
</div>




</form>

</center>

</body>

</html>
