<?php
    
    include_once '../model/config.php';

?>

<?php

    Class Booking extends DB
    {

        public $book;

        public function __construct()
    {
        $this->book = new DB();
        $this->book = $this->book->connect();
      
    }



    }
?>