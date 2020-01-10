<?php 
include 'connection.php';

function getSpecificAdmin($id){
    $conn = connect();
    $sql = "SELECT * FROM login_tb INNER JOIN users ON login_tb.login_id = users.user_id WHERE users.user_id = '$id'";
    $result = $conn->query($sql);
    if($result == false){
        die($conn->connect_error);
    }else{
        return $result->fetch_assoc();
    }
  }
  function GetAllUserList(){
      $conn = connect();
      $sql = "SELECT * FROM users";
      $result = $conn->query($sql);
      
      if($result->num_rows>0){
          $row = array();
          while($rows = $result->fetch_assoc()){
              $row[] = $rows;
          }
          return $row;
      }else{
          return FALSE;
      }

  }

  function getUserPlans(){
      $conn = connect();
      $sql = "SELECT * FROM users INNER JOIN plan ON users.user_id = plan.user_id";
      $result = $conn->query($sql);
      if($result->num_rows>0){
          $row = array();
          while($rows = $result->fetch_assoc()){
              $row[] = $rows;
          }
          return $row;
      }else{
          return FALSE;
      }
  }
  
?>
