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

    .logout-btn {
    text-decoration: none;
    font-family: fjella;
    font-size: 32px;
    color: #3D348B;
    margin: 0px 15px;
    }

    .logout-btn:hover {
        color: #6359c3;
    }

    

    /* DATABASE */

    #data-content {
        margin: 100px 150px;
        padding: 25px;
        border: 3px solid rgba(235, 235, 235, 0.2);
        background-color: white;
        backdrop-filter: blur(5px);
        border-radius: 35px;
        position: relative;
        z-index: 2;
    }

    .table-text {
        font-family: fjella;
        font-size: 30px;
        color: #333333;
        text-align: center;
    }

    /* TABLE */
    #table-part {
        margin: 40px 20px;
    }

    #table {
        border-collapse: collapse;
        width: 100%;
    }

    #table td, #table th {
        border: 1px solid #ddd;
        padding: 8px;
    }

    #table tr:nth-child(even){background-color: #f2f2f2;}
    #table tr:hover {background-color: #ddd;}

    #table th {
        padding: 15px;
        text-align: left;
        background-color: #3D348B;
        color: white;
        font-family: fjella;
        font-weight: lighter;
        font-size: 18px;
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

                <div id="top-links">
                    <a class="logout-btn" href="index.php">Go Back</a>
                    <a class="logout-btn" href="logout.php">Log Out</a>
                </div>
            </nav>

            <div id="table-part">
                <h2 class="table-text">Classes</h2>
                <table id="table">
                    <tr>
                        <th>Class ID</th>
                        <th>Grade</th>
                        <th>Class Capacity</th>
                        <th>Class' Room</th>
                        <th>Teacher's ID</th>
                        <th>Subject's ID</th>
                    </tr>
                    <?php $conn = mysqli_connect("localhost", "root", "", "alphonsus_primary_school");
                        if($conn-> connect_error) {
                            die("Failed to Connect to the Server");
                        }
                            $sql = "SELECT * FROM class";
                            $result = $conn-> query($sql);
                            if($result-> num_rows > 0) {
                                while ($row = $result-> fetch_assoc()){
                                    echo "<tr><td>".    $row["class_ID"] ."</td><td>". 
                                                        $row["class_year"] ."</td><td>". 
                                                        $row["class_capacity"] ."</td><td>". 
                                                        $row["class_room"] ."</td><td>". 
                                                        $row["teacher_ID"] ."</td><td>". 
                                                        $row["subject_ID"] ."</td></tr>";
                                }
                                echo "</table>";
                            }
                            else {
                                echo "0 Results";
                            }
                            $conn-> close();
                    ?>
                </table>
            </div>
        </div>
    </body>
</html>