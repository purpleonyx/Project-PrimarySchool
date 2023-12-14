<?php
session_start();

include("connection.php");
include("functions.php");

$user_data = check_login($con);
?>

<!DOCTYPE html><html>
    <head>
        <title>Database - St. Alphonsus Primary School</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
        <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    </head>

    <style>
        * {
            text-decoration: none;
        }

    @font-face {
    font-family: fjella;
    src: url(fonts/FjallaOne-Regular.ttf);
    }

    @font-face {
        font-family: vina;
        src: url(fonts/VinaSans-Regular.ttf);
    }

    body {
        background-image: url(images/background.jpg);
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
        background-attachment: fixed;
    }

    #bg-elements {
        width: auto;
        height: auto;
        position: fixed;
        top: 0;
        left: 0;
        z-index: 1;
    }

    nav {
        display: flex;
        justify-content: space-between;
    }

    #nav-logo-section {
        display: flex;
        justify-content: left;
        align-items: center;
        margin: 0px;
    }

    #main_logo {
        width: 30px;
        margin: 0px 0px 0px 10px;
    }

    #logotext {
        font-family: vina;
        font-size: 35px;
        font-weight: lighter;
        color: #333333;
        margin: -5px 0px 0px 15px;
    }

    #logout-btn {
    text-decoration: none;
    font-family: fjella;
    font-size: 32px;
    color: #3D348B;
    margin: 0px 15px;
    }

    #logout-btn:hover {
        color: #6359c3;
    }

    /* DATABASE */

    #data-content {
        margin: 100px 150px;
        padding: 25px;
        border: 3px solid rgba(235, 235, 235, 0.2);
        background: linear-gradient(305deg, rgba(255,255,255,0.1) 0%, rgba(255,255,255,0.2) 100%);
        backdrop-filter: blur(10px);
        border-radius: 35px;
        position: relative;
        z-index: 2;
    }

    /* LINKS */

    #data-links-section-one {
        display: flex;
        flex-direction: row;
        justify-content: center;
        gap: 20px;
        margin: 90px auto 0px auto;
    }

    #data-links-section-two {
        display: flex;
        flex-direction: row;
        justify-content: center;
        gap: 20px;
        margin: 20px auto 90px auto;
    }

    .inner-link {
        display: flex;
        flex-direction: row;
        align-items: center;
        border: 3px solid rgba(235, 235, 235, 0.2);
        background: linear-gradient(305deg, rgba(255,255,255,0.5) 0%, rgba(255,255,255,0.7) 100%);
        backdrop-filter: blur(15px);
        border-radius: 15px;
        padding: 10px;
        transition: transform .2s;
    }

    .inner-link:hover {
        transform: scale(1.05);
    }

    .data-link-img {
        width: 100px;
    }

    .data-link-name {
        margin-left: 10px;
        margin-right: 15px;
        font-family: fjella;
        font-size: 30px;
        color: #333333;
        text-align: center;
    }
    </style>

    <body>
        <img src="bg-elements-2.svg" id="bg-elements">
        <div id="data-content">
            <nav>
                <div id="nav-logo-section">
                    <img src="logo.svg" alt="St. Alphonsus Primary School Main Logo" id="main_logo">
                    <h2 id="logotext">St Alphonsus Primary School</h2>
                </div>
                <a id="logout-btn" href="logout.php">Log Out</a>
            </nav>

            <div id="data-links-section-one">

                <a href="teachers.php" class="data-link">
                    <div class="inner-link">
                        <img src="images/teacher.png" class="data-link-img">
                        <h2 class="data-link-name">Teachers</h2>
                    </div>
                </a>

                <a href="parents.php" class="data-link">
                    <div class="inner-link">
                        <img src="images/parents.png" class="data-link-img">
                        <h2 class="data-link-name">Parents/Guardians</h2>
                    </div>
                </a>

                <a href="pupils.php" class="data-link">
                    <div class="inner-link">
                        <img src="images/pupil.png" class="data-link-img">
                        <h2 class="data-link-name">Pupils</h2>
                    </div>
                </a>

                <a href="class.php" class="data-link">
                    <div class="inner-link">
                        <img src="images/class.png" class="data-link-img">
                        <h2 class="data-link-name">Classes</h2>
                    </div>
                </a>
            </div>

            <div id="data-links-section-two">

                <a href="attendance.php" class="data-link">
                    <div class="inner-link">
                        <img src="images/attendance.png" class="data-link-img">
                        <h2 class="data-link-name">Attendance</h2>
                    </div>
                </a>

                <a href="subject.php" class="data-link">
                    <div class="inner-link">
                        <img src="images/subjects.png" class="data-link-img">
                        <h2 class="data-link-name">Subjects</h2>
                    </div>
                </a>

                <a href="salary.php" class="data-link">
                    <div class="inner-link">
                        <img src="images/salary.png" class="data-link-img">
                        <h2 class="data-link-name">Teachers' Salary</h2>
                    </div>
                </a>
            </div>
        </div>
    </body>
</html>