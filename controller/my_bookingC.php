<?php 

session_start();
include_once '../model/config.php';
include_once '../class/class_user.php';
include_once '../class/class_booking.php';



    $userid = $_SESSION['email'];

    
    $my_booking = new Booking ();

    $my_book = $my_booking->v_book($userid);

    
    
    $cnt=1;
    
    


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
     
      <table class="table table-bordered table-striped table-responsive table-hover">
      <thead>
         <tr>
            <th>Serial</th>
            <th>Topic</th>
            <th>Agenda</th>
           <th>Person</th>
            <th>Date</th>
            <th>Time</th>
            <th>Created_by</th>
              <th>Action</th>  
         </tr>
  </thead>
         <tbody>
         <?php           
      while($row=mysqli_fetch_array($my_book))
  
  { ?>
           <tr>

           <td><?php echo $cnt; ?></td>
    <td><?php echo $row["topic"]; ?></td>
    <td><?php echo $row["agenda"]; ?></td>
    <td><?php echo $row["person"]; ?></td>
    <td><?php echo date('d M, Y', strtotime($row["date"])); ?></td>
    <td><?php echo  date('h:ia', strtotime($row["time"])); ?></td>
    <td><?php echo $row["created_by"]; ?></td>

    <td style='width:200px'> 
    <a href ="http://localhost/app/view/view.php?booking_id=<?php echo $row["booking_id"];?>" class= "btn btn-info  btn-sm"> View
      </a>

      <a href ="http://localhost/app/view/update_appointment.php?booking_id=<?php echo $row["booking_id"];?>" class= "btn btn-success  btn-sm"> Edit
      </a>

      <a href ="http://localhost/app/controller/delete_bookingC.php?booking_id=<?php echo $row["booking_id"];?>" onclick=" return confirm('Are you sure?')" class= "btn btn-danger  btn-sm"> Delete
      </a>

      </td>
      

    
 </tr>
       
 <?php $cnt=$cnt+1;} ?>

     
 
      
    </tbody>
    </tr>
  </table>
</div>

</body>
</html>



