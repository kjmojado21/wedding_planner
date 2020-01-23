<?php
include 'functions/adminFunctions.php';

?>
<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <?php
                include 'adminMenuBar.php';
                ?>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <p class="lead text-center bg-info p-5">
                    Quick Configuration
                </p>
            </div>
        </div>


    </div>


    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="jumbotron w-100">
                    <p class="lead">Add new Wedding Planner</p>
                    <hr>
                    <form method="post">
                        <input type="text" name="fname"  placeholder="Planner Firstname" class="form-control">
                        <input type="text" name="lname"  placeholder="Planner Lastname" class="form-control mt-3">
                        <input type="text" name="number" placeholder="Planner Contact Info" class="form-control mt-3">
                        <button type="submit" name="add_planner" class="btn btn-outline-info mt-3">Add Planner</button>

                    </form>

                    <?php 
                        if(isset($_POST['add_planner'])){
                            $fname = $_POST['fname'];
                            $lname = $_POST['lname'];
                            $contact = $_POST['number'];

                            addPlanner($fname,$lname,$contact);
                        }
                    
                    ?>

                </div>

            </div>
            <div class="col-lg-4">
                <div class="jumbotron w-100">
                    <p class="lead text-center">Add new new church</p>
                    <hr>
                    <form method="post">
                        <input type="text" name="churchName"  placeholder="Church Name" class="form-control">
                        <input type="text" name="location"  placeholder="Church Location" class="form-control mt-3">
                        <input type="number" name="price" placeholder="Church Price" class="form-control mt-3">
                        <button type="submit" name="add_church" class="btn btn-outline-info mt-3">Add Church</button>

                    </form>
                    <?php 
                        if(isset($_POST['add_church'])){
                            $churchName = $_POST['churchName'];
                            $location = $_POST['location'];
                            $price = $_POST['price'];

                            addChurch($churchName,$location,$price);
                        }
                    
                    ?>
                    
                    
                    
                </div>

            </div>
            <div class="col-lg-4">
                <div class="jumbotron w-100">
                    <p class="lead">Add new Catering Service</p>
                    <hr>
                    <form method="post">
                        <input type="text" name="bundle_name"  placeholder="Bundle Name" class="form-control">
                        <input type="text" name="cater_name"  placeholder="Catering Bundle" class="form-control mt-3">
                        <input type="number" name="cater_price" placeholder="Service Price" class="form-control mt-3">
                        <button type="submit" name="add_cater" class="btn btn-outline-info mt-3">Add Catering Service</button>

                    </form>
                    <?php 
                        if(isset($_POST['add_cater'])){
                            $bundle_name = $_POST['bundle_name'];
                            $cater_name = $_POST['cater_name'];
                            $cater_price = $_POST['cater_price'];

                            addCater($bundle_name,$cater_name,$cater_price);

                            
                        }
                    
                    ?>
                </div>

            </div>

        </div>



    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>