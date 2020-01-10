<?php
include 'functions/functions.php';

if (empty($_SESSION['login_id'])) {
    header('location:login.php');
}

$currentUser = $_SESSION['login_id'];
// echo $_SESSION['login_id'];
?>
<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://kit.fontawesome.com/eb83b1af77.js" crossorigin="anonymous"></script>
    <style>

    </style>
    <script src="https://kit.fontawesome.com/eb83b1af77.js" crossorigin="anonymous"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/card.css">
</head>

<body>
    <div class="row">
        <div class="col-lg-12">
            <?php
            include 'menubar.php';
            ?>
        </div>

    </div>
    <div class="container mt-5">
    <div class="card w-50 mx-auto">
                    <div class="card-header">
                         <p class="lead">Quick Application Proccess</p>
                    </div>
                    <div class="card-body">
                         <form action="" method="post">
                             <div class="form-group">
                                 <select name="wedding_type" class="form-control" id="">
                                    <option selected disabled>Choose Wedding Type</option>
                                    <option value="Civil">Civil Wedding</option>
                                    <option value="Church">Church Wedding</option>

                                </select>
                        
                             </div>
                             <button type="submit" name="next" class=" w-25 float-right btn btn-outline-primary"><i class="fas fa-angle-double-right"></i></button>
                            <br> <br>
                        </form>
                            <?php 
                                if(isset($_POST['next'])){
                                    $type = $_POST['wedding_type'];
                                    if($type == 'Civil'){
                                        
                                        echo "<form method = 'post' class ='mt-3'>";
                                            echo "<select name = 'catering_services' class = 'form-control'>";
                                                echo "<option value = '' selected disabled>Choose a Catering Service</option>";
                                                echo "<option value = 'Port Seafood Restaurant'>Port Seafood Restaurant</option>";
                                                echo "<option value = 'Wingers Unli Chicken'>Wingers Unli-Chicken</option>";
                                            echo "</select>";
                                            echo "<input type = 'hidden'  name = 'wedding_type' value = '".$type."'>";
                                            echo "<br>";
                                            echo "<input type = 'date' name = 'application_date' class = 'form-control'>";
                                            echo "<br>";
                                            echo "<button type='submit' name='afterFood' class=' w-25 float-right btn btn-outline-primary'><i class='fas fa-angle-double-right'></i></button>
                                            <br> <br>";


                                    }else{
                                        echo "<form method = 'post' class ='mt-3'>";
                                        echo "<select name = 'catering_services' class = 'form-control'>";
                                                echo "<option value = '' selected disabled>Choose a Catering Service</option>";
                                                echo "<option value = 'Port Seafood Restaurant'>Port Seafood Restaurant</option>";
                                                echo "<option value = 'Wingers Unli Chicken'>Wingers Unli-Chicken</option>";
                                            echo "</select>";
                                            echo "<input type = 'hidden'  name = 'wedding_type' value = '".$type."'>";
                                            echo "<br>";
                                        echo "<select name = 'church_name' class = 'form-control'>";
                                            echo "<option value = '' selected disabled>Choose a Church Location</option>";
                                            echo "<option value = 'St.Therese Chuch'>St.Therese Church</option>";
                                            echo "<option value = 'Metropolitan Cathedral'>Metropolitan Cathedral</option>";
                                        echo "</select>";
                                        echo "<input type = 'hidden'  name = 'wedding_type' value = '".$type."'>";
                                        echo "<br>";
                                        echo "<input type = 'date' name = 'application_date' class = 'form-control'>";
                                        echo "<br>";
                                        echo "<button type='submit' name='afterFood' class=' w-25 float-right btn btn-outline-primary'><i class='fas fa-angle-double-right'></i></button>
                                        <br> <br>";

                                    }                           
                                }
                                if(isset($_POST['afterFood'])){
                                    if(!empty($_POST['church_name'])){
                                        $weddingType = $_POST['wedding_type'];
                                        $caterService = $_POST['catering_services'];
                                        $churchName = $_POST['church_name'];
                                        $applicationDate = $_POST['application_date'];
                                        churchWeddingPlan($currentUser,$weddingType,$churchName,$caterService,$applicationDate);
                                        

                                    }else{
                                        $weddingType = $_POST['wedding_type'];
                                        $caterService = $_POST['catering_services'];
                                        $applicationDate = $_POST['application_date'];
                                        civilWeddingPlan($currentUser,$weddingType,$caterService,$applicationDate);
                                       

                                    }

                                }
                            
                            
                            ?>
                    </div>
                </div>


    </div>
   <?php 
    include 'footer.php';
   
   ?>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>