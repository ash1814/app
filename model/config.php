<?php

    class DB
    
    
    {

        private $host;
        private $user;
        private $password;
        private $database;
         
      
        


    public function __construct ()

    {
        $this->host = 'localhost';
        $this->user = 'root';
        $this->password = '';
        $this->database = 'oop';
        $this->myConnection = mysqli_connect("localhost", "root", "", "oop");

    }

    public function connect ()
    {

      $conn = new mysqli ("localhost", "root", "", "oop");
      
      
      if($conn->connect_error)

      {
        die ("Connection failed: . $conn->connect_error");

      }
      
    }

    public function check($email) 
    
    {
        $conn = new mysqli ("localhost", "root", "", "oop");

        $result ="SELECT email FROM user WHERE email='$email'";

        $checkuser = mysqli_query($conn, $result);

        return $checkuser;

    }

    public function insert ($fname, $lname, $department, $designation, $email, $password_1)
    {
       
       $conn = new mysqli ("localhost", "root", "", "oop");


        $idata = "INSERT INTO user(fname,lname,department,designation,email,password)
        VALUES ('$fname', '$lname', '$department', '$designation', '$email', '$password_1')"; 

        $iquery = mysqli_query ($conn,$idata);

        return $iquery;

       
    }


    public function log($email,$password_1)

    {
        $conn = new mysqli ("localhost", "root", "", "oop");

        $login = "SELECT * FROM user WHERE email= '$email' AND password= '$password_1'";

        
        $lquery = mysqli_query ($conn, $login);


        return $lquery;

    }

    public function bookc($topic,$agenda,$person,$date,$time,$created_by)

    {
        $conn = new mysqli ("localhost", "root", "", "oop");

        $boo = "INSERT INTO booking (topic,agenda,person,date,time, created_by)
        VALUES ('$topic', '$agenda', '$person', '$date', '$time', '$created_by')";
        
        $bquery = mysqli_query ($conn, $boo);

        return $bquery;

    }

    public function v_book($created_by)
    {
        

        $conn = new mysqli ("localhost","root", "", "oop");

        $vquery= "SELECT `booking_id`, `topic`, `agenda`, `person` ,`date`, `time`, `created_by` FROM  booking WHERE created_by = '$created_by' ";

        
        $view = mysqli_query ($conn, $vquery);

        return $view;
    }


    public function edit($booking_id)
    {
        
        

        $conn = new mysqli ("localhost","root", "", "oop");

        $vquery= "SELECT  `booking_id`, `topic`, `agenda`, `person` ,`date`, `time`, `created_by` FROM  booking WHERE booking_id = '$booking_id' ";

        
        $fetch = mysqli_query ($conn, $vquery);

        
        return $fetch;
        }
           
        
    
    




   public function update($booking_id, $topic, $agenda , $person, $date, $time)

   {
        $conn = new mysqli ("localhost","root", "", "oop");
    
        $update_query = "UPDATE booking set topic = '$topic', agenda='$agenda', person = '$person', date = '$date', time = '$time' WHERE booking_id ='$booking_id'";

        $update = mysqli_query ($conn, $update_query);

        return $update;


    }

    public function delete($booking_id)
    {

        $conn = new mysqli ("localhost","root", "", "oop");

        $delete_query ="DELETE FROM booking WHERE booking_id = '$booking_id'";
        
        $delete = mysqli_query($conn,$delete_query);

        return $delete;
    }

    
}