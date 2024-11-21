<?php
 

 class Connect{
    public $host = 'localhost';
    public $user = 'root';
    public $password = '';
    public $db_name = 'sms';
    public $conn; 

    public function __construct(){
        $this->conn = mysqli_connect($this->host, $this->user, $this->password, $this-> db_name);
    }
 }
 class Listing extends Connect{
    public function Admin(){
        $duplicate = mysqli_query($this->conn, "SELECT * FROM `users` ");
         
           
        //    echo " $row[firstname]"; 
        }
           
        }
    