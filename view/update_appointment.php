<?php

session_start();
include_once '../model/config.php';
include_once '../class/class_user.php';
include_once '../class/class_booking.php';



   

    
    

    $booking_id = $_GET["booking_id"];

   
    $edit_booking = new Booking ();

      $edit_book = $edit_booking->edit($booking_id);
    
    
      
    
    
      while($row=mysqli_fetch_array($edit_book))
       

      

    {
  
   

    ?>

    <!doctype html>
    <html lang="en">
      <head>
        <!--  meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    
        <title>Hello, world!</title>
      </head>
      <body>
    
      
        
         <div class = "container">
         <div class = "row">
         <div class = "col -md-12 mt -5">
         <h1 class ="text-center">Update Booking </h1>
         <hr style= "height: 1px;color: black;background-color:black;">
         </div> 
         </div>
         <div class = "row">
         
    
         <div class="col-md-5" mx- auto>
    
        
         
         <form action = "http://localhost/app/controller/update_bookingC.php?booking_id=<?php echo $row["booking_id"];?>" method= "post">
         <div class ="form-group">
            <label for="">Topic</label >
             <input type = "text" name= "topic" value = "<?php echo $row["topic"]; ?>"    class="form-control"  >
              </div>
    
              <div class ="form-group">
            <label for="">Agenda</label >
             <input type = "text" name= "agenda" value = "<?php echo $row["agenda"]; ?>" class="form-control" >
              </div>
    
    
              <div class ="form-group">
            <label for="">Person</label > <br>
                 <input type="checkbox" name="person[]" value = "<?php echo $row["person"]; ?>"  > Tech<br><br>
                  <input type="checkbox" name="person[]" value ="MKT" > MKT<br><br>
                  <input type="checkbox" name="person[]" value ="Sales" > Sales<br><br>
                  <input type="checkbox" name="person[]" value ="Accounts" > Accounts <br><br></td>
              </div>
    
              <div class ="form-group">
            <label for="">Date</label>
             <input type = "date" name= "date" value = "<?php echo $row["date"]; ?>" class="form-control" >
              </div>
    
              <div class ="form-group">
            <label for="">Time</label>
             <input type = "time" name= "time" value = "<?php echo $row["time"]; ?>"  class="form-control" >
              </div>
    
              
    
              <div class ="form-group">
              <button type= "Submit" value = "Submit" name="login_user"  class = "btn btn-primary">Update</button>
         </form>
         
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
      </body>
    </html>

    
     
</tr>
 
     
    <?php } ?>
     
 
      
    </tbody>
  </table>
</div>

</body>
</html>

