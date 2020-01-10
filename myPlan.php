<?php
include 'functions/functions.php';
$userID = $_SESSION['login_id'];
$userPlan = getOneUserPlan($userID);

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
                include 'menubar.php';
                ?>
            </div>
        </div>
    </div>
    <div class="container mt-3">
        <div class="row">
            <div class="jumbotron w-100">
            <div class="col-lg-12">
                <?php
                if ($userPlan == false) {
                    echo "<div class = 'alert alert-info text-center'>You Havent Created a plan yet. Plan now!</div>";
                } else {
                   foreach($userPlan as $key => $row){
                       $planID = $row['plan_id'];
                    echo "<div class = 'card float-left mr-3 mb-4'>";
                        echo "<div class = 'card-header bg-info text-center text-light'>";
                            echo "<p>Application Date: </p>";
                            echo $row['application_date'];

                        echo "</div>";
                        echo "<div class = 'card-body'>";
                            echo "<p>Type: ".$row['wedding_type']." Wedding</p>";
                            echo "<a href = 'weddingPlan.php?plan_id=$planID ' class = 'card-link float-right'><i class='fas fa-long-arrow-alt-right'>Finalize Plan</i></a>";
                        echo "</div>";
                echo "</div>";
                   }
                }

                ?>
            </div>
           
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