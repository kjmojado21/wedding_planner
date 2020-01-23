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

  function addPlanner($fname,$lname,$contact){
      $conn = connect();
      $sql = "INSERT INTO planner_list(planner_fname,planner_lname,planner_num)VALUES('$fname','$lname','$contact')";
      $result = $conn->query($sql);
      
      if($result == FALSE){
          die($conn->connect_error);
      }else{
          echo "<div class = 'alert alert-success mt-3'>Planner Added Successfully!</div>";
      }

     

  }

  function addChurch($name,$location,$price){
      $conn = connect();
      $sql = "INSERT INTO church_tb(church_name,church_loc,price)VALUES('$name','$location','$price')";
      $result = $conn->query($sql);
      
      if($result == FALSE){
          die($conn->query($sql));
      }else{
        echo "<div class = 'alert alert-info mt-3'>Church Added Successfully!</div>";
      }
  }
  
  function addCater($bundle,$name,$price){
    $conn = connect();
    $sql = "INSERT INTO cater_tb(food_bundle,cater_host,cater_price)VALUES('$bundle','$name','$price')";
    $result = $conn->query($sql);
    
    if($result == FALSE){
        die($conn->query($sql));
    }else{
      echo "<div class = 'alert alert-secondary mt-3'>Service Added Successfully!</div>";
    }
}
  
?>
