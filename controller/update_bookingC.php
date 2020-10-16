<?php

session_start();
include_once '../model/config.php';
include_once '../class/class_user.php';
include_once '../class/class_booking.php';



    
  
    
    $update_booking = new Booking ();

    if (isset($_POST['login_user']))
    {
        $booking_id = $_GET['booking_id'];
        $topic = $_POST["topic"];
        $agenda = $_POST["agenda"];
        $person_array =  $_POST["person"];
        $person_array = implode (",", $person_array);
        $date = $_POST["date"];
        $time = $_POST["time"];
    
        $update = $update_booking->update($booking_id, $topic, $agenda , $person_array, $date, $time);
        
        if ($update)
    {

        echo "Your record has been updated";
        /// header("Location:http://localhost/app/view/update_success_message.php");

    }
        else

    {

        echo "Booking failed";

    }

    }

?>


