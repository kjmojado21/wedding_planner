<?php 
include 'functions/functions.php';

if(empty($_SESSION['login_id'])){
    header('location:login.php');
}

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

       
            <h2>OUR WEDDING SERVICES</h2>
            <div class="row mt-5">
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                    <div class="our-services-wrapper mb-60">
                        <div class="services-inner">
                            <div class="our-services-img">
                                <img src="images/wedding.png" width="68px" alt="">
                            </div>
                            <div class="our-services-text">
                                <h4>TYPE OF WEDDING</h4>
                                <p class="lead mt-3">You can choose with different types of wedding here</p>
                            </div>
                            <a href="" class="float-right">Start Planning Here</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                    <div class="our-services-wrapper mb-60">
                        <div class="services-inner">
                            <div class="our-services-img">
                                <img src="images/church.png" width="68px" alt="">
                            </div>
                            <div class="our-services-text">
                                <h4>AVAILABLE CHURCHES</h4>
                                <p class="lead mt-3">We can also help you plan your church wedding</p>
                            </div>
                            <a href="" class="float-right">Start Planning Here</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                    <div class="our-services-wrapper mb-60">
                        <div class="services-inner">
                            <div class="our-services-img">
                                <img src="images/glasses.png" width="68px" alt="">
                            </div>
                            <div class="our-services-text">
                                <h4>CATERING SERVICES</h4>
                                <p class="lead mt-3">We have a list of available caterers that is affiliated with us</p>
                            </div>
                            <a href="" class="float-right">Start Planning Here</a>
                        </div>
                    </div>
                </div>
            </div>


       
        </div>
        <div class="row fixed-bottom p-4 bg-dark">
            <div class="col-lg-12">
               <p class="text-center lead text-light">
                   Footer
               </p> 
            </div>
        </div>


        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>