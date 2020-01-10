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


    </div>

    <div class="container">
        <div class="jumbotron w-100">
            <div class="row">
                <div class="col-lg-4">
                    <form method="post">
                        <button type="submit" name="addPlanner" class="btn btn-outline-info btn-block">Add a wedding Planner</button>
                    </form>
                </div>
                <div class="col-lg-4">
                    <form method="post">
                        <button type="submit" name="addChurch" class="btn btn-outline-info btn-block">Add Church Location</button>
                    </form>
                </div>
                <div class="col-lg-4">
                    <form method="post">
                        <button type="submit" name="addCater" class="btn btn-outline-info btn-block">Add a Catering Service</button>
                    </form>
                </div>
            </div>

            <?php 
                if(isset($_POST['addPlanner'])){
                    echo "<form method = 'post'>";
                       echo "<div class ='card w-50 mx-auto mt-5'>";
                            echo "<div class = 'card-header'>";
                               
                            echo "</div>";

                            echo "<div class = 'card-body'>";
                                    echo "<div class = 'form-group'>";
                                    echo "<input type = 'text' name = 'planner_fname' class = 'form-control mt-2' placeholder ='Enter Wedding Planner Firstname'>";
                                    echo "<input type = 'text' name = 'planner_lname' class = 'form-control mt-2' placeholder ='Enter Wedding Planner Lastname'>";
                                    echo "<input type = 'number' name = 'contact_info' class = 'form-control mt-2' placeholder ='Enter Wedding Planner Contact Information'>";
                                    echo "<button type = 'submit' name = 'addPlanner' class ='btn btn-outline-info mt-3'>Add Planner</button>";
                            echo "</div>";

                        echo "</div>";
                    echo "</form>";

                }
                elseif(isset($_POST['addChurch'])){
                    
                }
                elseif(isset($_POST['addCater'])){
                    
                }else{
                    echo "<div class = 'alert alert-danger mt-5 text-center'>Choose from the available options!</div>";
                }
            
            ?>

        </button>



    </div>



    <div class="container-fluid">
        <div class="row fixed-bottom">
            <div class="col-lg-12">
                <?php
                include 'footer.php';
                ?>
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