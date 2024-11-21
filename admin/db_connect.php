<?php 

$connect =mysqli_connect("localhost", "root", "", "sms");

if($connect-> connect_error){
    die("connection failled". $connect->connect_error);
}

?>