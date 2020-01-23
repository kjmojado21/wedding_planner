<?php
include 'functions/functions.php';
$planID = $_GET['plan_id'];
$planDetails = OneWeddingPlan($planID);
// print_r($planDetails);


?>

<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <style>
        .content {
            /* background-image: url('images/flowering.jpg'); */

            height: 100vh;
        }

        body {
            background-image: url('images/flowering.jpg');
            background-size: cover;
        }
    </style>
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
    <div class="container content mt-5">
        <!-- <div class="jumbotron"> -->
        <div class="card w-50 mt-5">
            <div class="card-header">
                <p class="lead">
                    Basic Wedding Information:
                    <br>
                    <hr>
                    Application Date: <?php echo $planDetails['application_date']; ?>
                </p>
            </div>
            <div class="card-body">
                <form method="post">
                    <label for="" class="lead">Wedding Type: </label>
                    <input type="text" value="<?php echo $planDetails['wedding_type'] ?>" class="form-control" disabled>
                    <input type="hidden" name="wedding_type" value="<?php echo $planDetails['wedding_type'] ?>" class="form-control">

                    <br>
                    <?php
                    // $churchName = ;
                    if (!empty($planDetails['church_name'])) {
                        echo "<label for='' class='lead'>Wedding Type: </label>";
                        echo  "<select name = 'church_name' class = 'form-control'>";
                        echo "<option value = '" . $planDetails['church_name'] . "'>" . $planDetails['church_name'] . "</option>";
                        $churchList = getChurchList();
                        foreach ($churchList as $churchName) {
                            echo "<option value = '" . $churchName['church_name'] . "'>" . $churchName['church_name'] . "</option>";
                        }
                        echo "</select>";
                        echo "<br>";
                    }
                    ?>

                    <label for="" class="lead">Catering Services</label>
                    <select name="catering_service" id="" class="form-control">
                        <?php
                        $caterList = getCaterList();
                        foreach ($caterList as $cater) {
                            echo "<option value = '" . $cater['cater_host'] . "'>" . $cater['cater_host'] . "</option>";
                        }
                        ?>
                    </select>
                    
                    <br>
                    <label for="" class="lead">Wedding Date</label>
                    <?php
                    if (empty($planDetails['wedding_date'])) {
                        echo "<input type = 'date' name ='wedding_date' class = 'form-control'>";
                    } else {
                        echo "<input type = 'date' name ='wedding_date' value = '" . $planDetails['wedding_date'] . "' class = 'form-control'>";
                    }

                    ?>

                    <br>
                    <button type="submit" name="finalizeBasicPlan" class="btn btn-outline-info btn-block">Confirm Basic Wedding Information</button>
                </form>
                <?php
                if (isset($_POST['finalizeBasicPlan'])) {
                    $type = $_POST['wedding_type'];

                    $cater = $_POST['catering_service'];
                    $weddingDate = $_POST['wedding_date'];
                    $planID = $planDetails['plan_id'];

                    if (empty($_POST['church_name'])) {
                        updateOneCivilPlan($type, $cater, $weddingDate, $planID);
                    } else {
                        updateOneChurchPlan($type, $_POST['church_name'], $cater, $weddingDate, $planID);
                    }
                }

                ?>
            </div>
        </div>
        <!-- </div> -->



    </div>



    <div class="container-fluid">
        <?php
        // include 'footer.php';
        ?>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>