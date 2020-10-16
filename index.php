<?php session_start(); 
if(strlen($_SESSION['email'])=="")


{
  header("http://localhost/app/controller/logout.php");
} 


?>

<!DOCTYPE html>
<html>
<head>
<style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #F9FDFD;
}

li {
  float: left;
}

li a, .dropbtn {
  display: inline-block;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover, .dropdown:hover .dropbtn {
  background-color:  skyblue;
}

li.dropdown {
  display: inline-block;
  
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #FFFFFF;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {background-color: #09E2F2;}

.dropdown:hover .dropdown-content {
  display: block;
}
</style>
</head>
<body>

<ul>
  <li><a href="#home">Home</a></li>
  
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Appointment</a>
    <div class="dropdown-content">
      <a href="http://localhost/app/view/book_appointment.php">Create Appointment</a>
      <a href="http://localhost/app/controller/my_bookingC.php">My Appointments</a>
      

    <li><a href="http://localhost/app/controller/logout.php">Log out</a></li>


    
    </div>

  </li>
  <form class="form-horizontal" action='' method="POST">
<fieldset>
<div id="legend">
<legend class="" align="center">Welcome Back : <?php echo $_SESSION["email"];?></legend>
</div>
  
  
</ul>
<ul>
  
</ul>

<h3></h3>
<p>.</p>

</body>
</html>
