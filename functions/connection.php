<?php 
session_start();
function connect(){
    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'wedding_db';

    $conn = new mysqli($servername,$username,$password,$database);

    if($conn->connect_error){
        die($conn->connect_error);
    }else{
        return $conn;
        // echo "connect good";
    }
}





?>