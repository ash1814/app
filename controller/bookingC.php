<?php 

session_start();
include_once '../model/config.php';
include_once '../class/class_user.php';
include_once '../class/class_booking.php';
?>

<?php
  
  
   $book = new Booking ();

    if (isset($_POST['login_user']))
    {
        $topic = $_POST["topic"];
        $agenda = $_POST["agenda"];
        $person_array =  $_POST["person"];
        $person_array = implode (",", $person_array);
        $date = $_POST["date"];
        $time = $_POST["time"];
        $created_by = $_SESSION["email"];

        
        

        $booki = $book->bookc($topic, $agenda, $person_array, $date, $time,$created_by);

        
        

        
        if ($booki)
    {

        header("Location:http://localhost/app/view/book_success_msg.php");

    }
        else

    {

        echo "Booking failed";

    }

    }

?>




        