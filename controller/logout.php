

<?php

	session_start ();


	if(isset($_SESSION['login_user'])){

		session_destroy ();

		header("Location:http://localhost/app/view/login.php");
			
		
	}
	else 
	{
		header("Location:http://localhost/app/view/login.php");

	}

    
?>

