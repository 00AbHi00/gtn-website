<?php
include('include/header.html');
?>

<style>
    body {
        overflow-x: hidden;
        margin: 0px;
        padding: 0px;
        background: linear-gradient(90deg, #0700b8 0%, #4c9e9e 100%);
        
    }

    a {
        text-decoration: none;
    }

    .nav-bar {
        height: 80px;
        display: grid;
        align-items: center;
        
        filter: drop-shadow(0px 12px 3px black);
        padding-top: -10px;
    }

    .info-bar {
        --darkclr: #211c57fb;
        height: 30px;
        display: grid;
        align-items: center;
        background-color: rgba(230, 221, 221, 1);
        color: var(--darkclr);

        /* filter: drop-shadow(5px 1px 3px black); */
    }

    .inf {
        display: inline;
    }

    li {
        text-emphasis: none;
        list-style-type: none;
    }


    .navbar {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 20px;
        background-color: rgba(42, 38, 38, 0.438);
        filter: ;
        color: aqua;

    }

    .nav-links a {

        color: #fff;

    }

    /* LOGO */

    .logo {

        font-size: 32px;

    }

    /* NAVBAR MENU */

    .menu {

        display: flex;

        gap: 1em;

        font-size: 18px;

    }

    .menu li:hover {

        background-color: #4c9e9e;

        border-radius: 5px;

        transition: 0.3s ease;

    }

    .menu li {

        padding: 5px 14px;

    }

    /* DROPDOWN MENU */

    .services {

        position: relative;

    }

    .dropdown {

        background-color: rgb(1, 139, 139);

        padding: 1em 0;

        position: absolute;
        /*WITH RESPECT TO PARENT*/

        display: none;

        border-radius: 8px;

        top: 35px;

    }

    .dropdown li+li {

        margin-top: 10px;

    }

    .dropdown li {

        padding: 0.5em 1em;

        width: 8em;

        text-align: center;

    }

    .dropdown li:hover {

        background-color: #4c9e9e;

    }

    .services:hover .dropdown {

        display: block;

    }


    /*RESPONSIVE NAVBAR MENU STARTS*/

    /* CHECKBOX HACK */

    input[type=checkbox] {

        display: none;

    }

    /*HAMBURGER MENU*/

    .hamburger {

        display: none;

        font-size: 24px;

        user-select: none;

    }

    /* APPLYING MEDIA QUERIES */

    @media (max-width: 768px) {

        .menu {

            display: none;
            position: absolute;
            background-color: red;
            right: 0;

            left: 0;

            text-align: center;

            padding: 16px 0;

        }

        .menu li:hover {

            display: inline-block;

            background-color: #4c9e9e;

            transition: 0.3s ease;

        }

        .menu li+li {

            margin-top: 12px;

        }

        input[type=checkbox]:checked~.menu {

            display: block;

        }

        .hamburger {

            display: block;

        }

        .dropdown {

            left: 50%;

            top: 30px;

            transform: translateX(35%);

        }

        .dropdown li:hover {
            background-color: #4c9e9e;
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
        .dot:hover{

        }

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
</style>



<!-- Information bar -1 -->
<nav class="info-bar">
    This is information bar
</nav>

<!--Navigation bar -1 -->
<nav class="navbar">

    <!-- LOGO -->

    <div class="logo">GTN-logo</div>

    <!-- NAVIGATION MENU -->

    <ul class="nav-links">

        <!-- USING CHECKBOX HACK -->

        <input type="checkbox" id="checkbox_toggle" />

        <label for="checkbox_toggle" class="hamburger">&#9776;</label>

        <!-- NAVIGATION MENUS -->

        <div class="menu">

            <li><a href="#">Home</a></li>
            <li><a href="#">About</a></li>
            <li class="services">

                <a href="#">Services</a>

                <!-- DROPDOWN MENU -->
                <ul class="dropdown">
                    <li><a href="#">Dropdown 1 </a></li>
                    <li><a href="#">Dropdown 2</a></li>
                    <li><a href="#">Dropdown 2</a></li>
                    <li><a href="#">Dropdown 3</a></li>
                    <li><a href="#">Dropdown 4</a></li>
                </ul>
            </li>
            <li><a href="#">Pricing</a></li>
            <li><a href="#">Contact</a></li>

        </div>

    </ul>

</nav>






<div style="margin-top: 3000px;">
    asdsd
</div>

<?php
include('include/footer.html');
?>