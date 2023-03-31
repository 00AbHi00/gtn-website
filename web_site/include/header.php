<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Green Tara Nepal</title>
    <link rel="icon" href="Fav-icon/favicon.ico">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css">
    <style>
        .box {
    background-color: #f2f2f2;
    padding: 20px;
    margin-bottom: 20px;
  }
  
  .box h3 {
    color: #ffa500; /* dark yellowish color */
  }
  
  .box p {
    color: #000; /* black color */
  }
        a {
            color: inherit;
            text-emphasis: none;
            text-decoration: none !important;
        }

        a:hover {
            color: red;
            text-emphasis: none;
            text-decoration: none !important;

        }

        body {
            background-color: rgba(0, 0, 0, .02);
        }

        /* Create a semi-transparent overlay to dim the background */

        nav {
            width: 90%;
            margin: 0 auto;
            filter: drop-shadow(0px 5px 6px black);
            background-color: rgba(230, 221, 221, .1);
            z-index: 5 !important;
        }

        .bg-dark {

            background-color: rgba(0, 0, 0, .6) !important;

        }

        nav:hover {

            z-index: 2;
        }


        .navbar-brand img {
            height: 50px;
        }

        .navbar-toggler {
            border: none;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            outline: none;
        }

        .nav-item {
            background-color: rgba(230, 221, 221, .01);
            margin-left: 20px;
        }

        .nav-link {
            color: #333;
            font-weight: 500;
            transition: color 0.2s ease-in-out;
        }

        .nav-link:hover,
        .nav-link.active {
            color: #06c;
        }

        @media (max-width: 768px) {
            .navbar-expand-lg .navbar-nav {
                text-align: center;
            }

            .navbar-expand-lg .navbar-nav .nav-item {
                display: inline-block;
                float: none;
            }
        }

        /* preloader  */

        .preloader {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .dot {
            background-image: url(images/Green\ Tara\ Photo.png);
            background-size: cover;
            background-position: center;
            width: 50px;
            height: 50px;
            margin: 5px;
            border-radius: 50%;
            animation: dot-bounce 2s ease-in-out infinite;
            transition: background-color 0.3s ease;
        }

        .dot:hover {}

        .preloader:hover .dot {
            animation-duration: 0.6s;
            transform: scale(1.5);
        }

        .dot:nth-child(1) {
            animation-delay: 0s;
        }

        .dot:nth-child(2) {
            animation-delay: 0.2s;
        }

        .dot:nth-child(3) {
            animation-delay: 0.4s;
        }

        .dot:nth-child(4) {
            animation-delay: 0.8s;
        }

        @keyframes dot-bounce {
            0% {
                transform: translateY(-20%);
                background-color: #1a624b;
            }

            50% {
                transform: translateY(20%);

            }

            100% {
                transform: translateY(-20%);
            }
        }

        .dot:hover {
            animation-play-state: paused;
            transform: scale(1.5) translateY(50%) ease-in;
            background-color: antiquewhite;
        }

        /* preloader ends */


        .info-bar {
            position: relative;
            top: 0;
            left: 0;
            width: 100%;

            background-color: #1a624b;
            z-index: 6;
            display: flex;
            align-items: center;
            justify-content: center;
            opacity: 1;
            transition: opacity 0.5s ease;
            filter: drop-shadow(2px 2px 0px 2px);
        }

        .info-bar p {
            margin: 0;
        }

        .social-icon {
            color: #fff;
            display: inline-block;
            margin-left: 10px;
        }

        .social-icon:hover {
            color: #ccc;
        }

        .navbar {
            margin-top: 0px;
        }

        @media screen and (max-width: 992px) {
            .info-bar {
                height: 30px;
            }

            .navbar {
                margin-top: 0px;
            }
        }

        @media screen and (max-width: 768px) {
            
            .info-bar{  
                height: auto;
            }
            .ok1 {
                margin-top: 12px;
            }

            .navbar {
                 margin-top: 0;
            }

            .length {
                display: none;
            }
        }


        a {
            text-decoration: none;
        }
    </style>
</head>

<body>

    <!-- Navigation Bar -->


    <div class="preloader">
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
    </div>


    </div>
    <div class="info-bar">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12 text-left ok1">

                    <p style="color:white; font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">
                        <a href="#" class="social-icon"><i class="fas fa-envelope"></i></a>

                        <span class="length">
                            <a href=info@greentara.org.np>info@greentara.org.np</a>
                        </span>
                        <a href="#" class="social-icon"><i class="fas fa-phone"></i></a>
                        <span class="length">
                            <?php
                            $phone_number = "01-4532698";
                            echo ("<a href=.$phone_number'>$phone_number</a>")
                                ?>
                    </p>
                    </span>
                </div>
                <div class="col-md-6 col-sm-12 text-right ok">
                    <a href="#" class="social-icon"><i class="fab fa-facebook"></i></a>
                    <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="social-icon"><i class="fab fa-linkedin"></i></a>
                    <a href="#" class="social-icon"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
        </div>
    </div>


    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="images/GTN logo_New.png" alt="Logo">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#"><i class="fas fa-home"> Home</i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.html"><i class="fas fa-info-circle"></i> About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fas fa-clipboard-list"></i> Projects</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fas fa-users"></i> Teams<!-- Team logo --></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="far fa-newspaper"></i>
                            Articles<!-- Article logo --></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fas fa-hands-helping"></i>
Connect With Us<!-- Contact Us logo --></a>
                    </li>


                </ul>
            </div>
        </div>
    </nav>