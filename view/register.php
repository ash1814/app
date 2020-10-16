
<html>
<body>

Wekcome to ShareTrip <br><br><br>

<form action = "../controller/registerC.php"  method= "post"  > 
    First Name  : <input type="text" name="fname" required><br>
    Last Name   : <input type="text" name="lname" required><br>
    Designation : <input type="text" name="designation"required><br>                            
    Department  : <input type="text" name="department"required><br>
    E-mail      : <input type="email" name="email" required><br>
    Password    : <input type="password" name="password_1" required><br>
    *Confirm Password :<input type="password" name="password_2" required><br>
    <input type = "Submit" value = "register" name= "login_user";><br><br>

  Already a member?  <br><br> <a href="../app/view/login.php">Login</a>
      <button type="submit" class="btn" >