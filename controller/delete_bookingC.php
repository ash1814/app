<?php
    
    session_start();
    include_once '../model/config.php';
    include_once '../class/class_user.php';
    include_once '../class/class_booking.php';


    $booking_id = $_GET['booking_id'];

   
    $delete_booking = new Booking ();

   
    
       
       $delete = $delete_booking->delete($booking_id);

      
        if($delete)

        {

       header("Location:http://localhost/app/view/delete_booking_message.php");
        }
    
        else
        {
            echo "Something Went Wrong";

        }

    

?>

  

   