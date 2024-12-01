<?php
 session_start();

 class Connection{
    public $host = 'localhost';
    public $user = 'root';
    public $password = '';
    public $db_name = 'sms';
    public $conn; 

    public function __construct(){
        $this->conn = mysqli_connect($this->host, $this->user, $this->password, $this-> db_name);
    }
 }
 class Register extends Connection{
    public function registration($firstname, $lastname, $email, $phone, $type, $password){
        $duplicate = mysqli_query($this->conn, "SELECT * FROM `users` WHERE email = '$email' ");
        if(mysqli_num_rows($duplicate)> 0){
            echo "<script>alert('email has been already taken')</script>";
            
        }else{
            
                $insert= "INSERT INTO `users` VALUES('$firstname', '$lastname', '$email', '$phone', '$type', '$password','','')";
                mysqli_query($this->conn, $insert);
                echo "<script>alert('successful registration')</script>";
            }
           
        }
    }

    class Login extends Connection{
        public $email;
        public function login( $email, $password){
            $result = mysqli_query($this->conn, "SELECT * FROM `users` WHERE email = '$email' ");
            $row = mysqli_fetch_assoc($result);

            if(mysqli_num_rows($result)> 0){
               if($password == $row["password"] AND $email == $row["email"]){
                $this->email = $row["email"];
                echo "<script>alert('successful login')</script>";
                return 1;
               }
                
            else{
                echo "<script>alert('wrong submit')</script>";
            }
        }else{
            echo "<script>alert('user not found')</script>";
        }

        }

        public function email(){
            return $this->email;
        }
    }

    class Select extends Connection{
        public function Email($email){

            $result = mysqli_query($this->conn, "SELECT * FROM `users` WHERE email = '$email' ");
            return $row = mysqli_fetch_assoc($result);
        }
    }
    class Total extends Connection{
        public $count;
        public function Admin(){
            $result = mysqli_query($this->conn, "SELECT * FROM `users` WHERE type = 'Admin' ");
             if($count = mysqli_num_rows($result)){
                echo " $count";
             }else{
                echo " 0";
             }
        }

        public function Teacher(){
            $result = mysqli_query($this->conn, "SELECT * FROM `users` WHERE type = 'Teacher' ");
             if($count = mysqli_num_rows($result)){
                echo " $count ";
             }else{
                echo " 0";
             }
        }

        public function Students(){
            $result = mysqli_query($this->conn, "SELECT * FROM `students` ");
             if($count = mysqli_num_rows($result)){
                echo " $count ";
             }else{
                echo " 0";
             }
        }
    }
 
