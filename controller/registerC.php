<?php 
    include_once '../model/config.php';
    include_once '../class/class_user.php';
   
    $user = new User();

    if (isset($_POST['login_user']))
    {


    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $email = $_POST['email'];
    $designation= $_POST['designation'];
    $department =$_POST['department'];
    $password_1 = $_POST['password_1'];
    

    $password_1 = md5($password_1);

    $check= $user-> check ($email);

    $useer = mysqli_num_rows($check);

    if ($useer >0)

    {

     echo "<span style='color:red'> Email already exists .</span>";
    
    }
    
    else
    {

    $reg= $user->insert($fname, $lname, $department, $designation, $email, $password_1);

       
        if($reg)
        {
            
            header("Location:http://localhost/app/view/registerSuccess.php");
   
        }

        else 
        

            {
                echo "Registration failed. Please try again ";
        
            }

        }
    }

?>