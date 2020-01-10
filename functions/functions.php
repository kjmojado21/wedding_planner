<?php
include 'connection.php';


function registerUser($username, $password, $fname, $lname, $number, $location)
{
    $conn = connect();
    $loginSql = "INSERT INTO login_tb(username,password,status)VALUES('$username','$password','users')";
    $insertIntoLoginResult = $conn->query($loginSql);

    if ($insertIntoLoginResult == TRUE) {
        $loginID = $conn->insert_id;
        $userSql = "INSERT INTO users(user_fname,user_lname,user_number,user_location,login_id)VALUES('$fname','$lname','$number','$location','$loginID')";
        $insertIntoUsersResult = $conn->query($userSql);
        if ($insertIntoUsersResult == FALSE) {
            echo "<div class ='alert alert-danger'>Error Adding into Users Table</div>";
        } else {
            header('location:login.php');
        }
    } else {
        echo "<div class ='alert alert-danger'>Error Adding into Login Table</div>";
    }
}

function login($username, $password){
    $conn = connect();
    $sql = "SELECT * FROM login_tb INNER JOIN users ON login_tb.login_id = users.login_id WHERE login_tb.username = '$username' AND login_tb.password = '$password';";
    $result = $conn->query($sql);
    if($result->num_rows==1){
        $row = $result->fetch_assoc();
    
        if(($row['status'])=='users'){
            $_SESSION['login_id'] = $row['user_id'];
            // returnf TRUE;
            header('location:index.php');
        }else{
            $_SESSION['login_id'] = $row['user_id'];
            // return TRUE;
            header('location:admin.php');
        }
    }else{
        echo "</br>";
        return FALSE;
        echo "<div class = 'alert alert-danger'>Incorrect Username or Password</div>";
    }
}
function churchWeddingPlan($userID,$weddingType,$churchName,$caterService,$applicationDate){
    $conn = connect();
    $sql = "INSERT INTO plan(user_id,wedding_type,church_name,cater_bundle,application_date)VALUES('$userID','$weddingType','$churchName','$caterService','$applicationDate')";
    $result = $conn->query($sql);

    if($result == false){
        die($conn->connect_error);
    }else{
        header('location:myPlan.php');
    }

}
function civilWeddingPlan($userID,$weddingType,$caterService,$applicationDate){
    $conn = connect();
    $sql = "INSERT INTO plan(user_id,wedding_type,cater_bundle,application_date)VALUES('$userID','$weddingType','$caterService','$applicationDate')";
    $result = $conn->query($sql);

    if($result == false){
        die($conn->connect_error);
    }else{
        header('location:myPlan.php');
    }

}

function getOneUserPlan($id){
    $conn = connect();
    $sql = "SELECT * FROM plan INNER JOIN users ON plan.user_id = users.user_id WHERE users.user_id = '$id'";
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
function OneWeddingPlan($planID){
    $conn = connect();
    $sql = "SELECT * from plan WHERE plan_id = '$planID'";
    $result = $conn->query($sql);

    if($result == FALSE){
        die($conn->connect_error);
    }else{
        return $result->fetch_assoc();
    }
    

}

function updateOneChurchPlan($weddingType,$churchName,$caterService,$weddingDate,$planID){
    $conn = connect();
    $sql = "UPDATE plan SET wedding_type = '$weddingType', church_name = '$churchName',cater_bundle = '$caterService',wedding_date = '$weddingDate', plan_status = 'finalized' WHERE plan_id = '$planID'";
    $result = $conn->query($sql);
    if($result == FALSE){
        die($conn->connect_error);
    }else{
        echo "<br>";
        echo "<div class ='alert alert-success lead'><Strong>Congratulations!</strong>Last step in finalizing. <a href = 'weddingPlanner.php?plan_id=".$planID."' class = 'alert-link'>Hire a Wedding Planner!</a></div>";
        // echo "update successfull!";
        
    }

}

function updateOneCivilPlan($weddingType,$caterService,$weddingDate,$planID){
    $conn = connect();
    $sql = "UPDATE plan SET wedding_type = '$weddingType',cater_bundle = '$caterService',wedding_date = '$weddingDate', plan_status = 'finalized' WHERE plan_id = '$planID'";
    $result = $conn->query($sql);
    if($result == FALSE){
        die($conn->connect_error);
    }else{
        echo "<br>";
        echo "<div class ='alert alert-success lead'><Strong>Congratulations!</strong>Last step in finalizing. <a href = 'weddingPlanner.php?plan_id=".$planID."' class = 'alert-link'>Hire a Wedding Planner!</a></div>";
        
    }

}
