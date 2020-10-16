<?php

session_start();
 include_once '../model/config.php';
 include_once '../class/class_user.php';
 
$user = new User();

    
if(isset($_POST['login_user']))
{

    
    $email = $_POST['email'];
    
    $password_1 = md5($_POST['password_1']);

    $usser = $user->log($email, $password_1);


    $log = mysqli_fetch_array($usser);

    

    if($log > 0)
    {

        
        
        $_SESSION['email']=$_POST["email"];
        

        header("Location:http://localhost/app/index.php");

    }
    else

    {
    
        echo "Please, check  username and password";
        
    }



    }

?>
