<?php 

session_start();
include_once '../model/config.php';
include_once '../class/class_user.php';
include_once '../class/class_booking.php';



    $booking_id = $_GET['booking_id'];

    
    $my_booking = new Booking ();

    $my_book = $my_booking->edit($booking_id);

    
    
    
    
    


    while($row=mysqli_fetch_array($my_book))
  
   {
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
      
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    </head>
    <body>
    
    <div class="container">
      <h2>My Appointment</h2>
                 
      <table class="table table-bordered">
      <thead>
         
         </thead>
         <tbody>
          
     
     <tr>
     <td><label>Booking Id</label></td>
     <td><?php echo $row["booking_id"]; ?></td>
     </tr>

     <tr>
     <td><label>Topic</label></td>
     <td><?php echo $row["topic"]; ?></td>
     </tr>
     <tr>
     <td><label>Agenda</label></td>
     <td><?php echo $row["agenda"]; ?></td>
     </tr>
     <tr>
     <td><label>Person</label></td>
     <td><?php echo $row["person"]; ?></td>
     </tr>
     <tr>
     <td><label>Date</label></td>
     <td><?php echo $row["date"]; ?></td>
     </tr>
     <tr>
     <td><label>Time</label></td>
     <td><?php echo $row["time"]; ?></td>
     </tr>

     <tr>
     <td><label>Created by</label></td>
     <td><?php echo $row["created_by"]; ?></td>
     </tr>

     </tr><?php } ?>
 </tr>
       
     

     
 
      
    </tbody>
  </table>
</div>

</body>
</html>



