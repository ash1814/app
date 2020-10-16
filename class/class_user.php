<?php
    include_once '../model/config.php';
?>

<?php

    class User extends DB 
    {

    public $db;

    public function __construct()
    {
        $this->db = new DB();
        $this->db = $this->db->connect();
      
    }
    
    }
