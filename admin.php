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
    <style>

    </style>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container-fluid">
        <div class="row mt-3">
            <div class="col-lg-12 header">
                <img src="images/banner1.jpg" style="height:240px; width:100%;" alt="">
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-lg-12">
                <?php
                include 'adminMenuBar.php';
                ?>
            </div>
        </div>
    </div>
    <div class="container mt-9">
        <div class="row">
            <div class="col-lg-9">
                <div class="jumbotron mt-3">
                    <div class="row">
                        <div class="col-lg-12">
                            <p class="lead text-center">
                                Wedding Planner Admin
                            </p>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col-lg-4">
                            <a role="button" href="weddingOptions.php" class="btn btn-outline-danger btn-block">Wedding Options</a>

                        </div>
                        <div class="col-lg-4">
                            <a role="button" href="#" class="btn btn-outline-info btn-block">Location Options</a>

                        </div>
                        <div class="col-lg-4">
                            <a role="button" href="#" class="btn btn-outline-secondary btn-block">Food Options</a>
                        </div>
                    </div>


                </div>
            </div>
            <div class="col-lg-3">
                <div class="jumbotron mt-3">
                    <p class="lead">
                        Recent Bookings
                    </p>
                    <table class="table table-danger table-hover table-striped table-bordered">
                        <thead>
                            <td>Name: </td>
                        </thead>
                        <tbody>
                            <?php 
                                $plans = getUserPlans();
                                foreach($plans as $key => $row){
                                    echo "<tr>";
                                        echo "<td>".$row['user_fname']." ".$row['user_lname']."</td>";
                                    echo "</tr>";

                                }
                            
                            ?>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>

    </div>
    <div class="container-fluid">
        <div class="row bg-dark">
            <div class="col-lg-12 p-2">
                <p class="lead text-light text-center">
                    footer
                </p>
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