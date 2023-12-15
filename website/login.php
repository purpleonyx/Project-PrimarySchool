<?php
session_start();
include("connection.php");
include("functions.php");

if($_SERVER['REQUEST_METHOD'] == "POST")
{
    $user_name = $_POST['user_name'];
    $password = $_POST['password'];

    if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
    {
        $query = "SELECT * FROM users WHERE user_name = '$user_name' AND password = '$password' LIMIT 1";
        $result = mysqli_query($con, $query);

        if($result)
        {
            if($result && mysqli_num_rows($result) > 0)
            {
                $user_data = mysqli_fetch_assoc($result);

                if($user_data['password'] === $password);
                {
                    $_SESSION['user_id'] = $user_data['user_id'];
                    header("Location: index.php");
                    die;
                }
            }
        } else {
            echo "Please check your Username and Password";
        }
    } else {
        echo "Please check your Username and Password";
    }
}
?>

<!DOCTYPE html><html>
    <head>
        <title>Log In - St. Alphonsus Primary School</title>
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

    #login_part {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        margin: 60px auto 70px auto;
        background-color: #faf8f8;
        border-radius: 50px;
        width: 380px;
        filter: drop-shadow(0 0 10px #caf0f8);
    }

    #login-text {
        font-family: fjella;
        font-size: 32px;
        color: #333333;
    }

    #form {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    .input-lg {
        width: 250px;
        height: 30px;
        padding: 10px 15px;
        border-radius: 15px;
        border: 2px solid #bdbdbd;
        font-family: fjella;
        font-size: 17px;
        color: #333333;
        margin: 10px;
    }

    #login-btn {
        width: 283px;
        height: 50px;
        background-color: #4361EE;
        border: none;
        padding: 10px;
        border-radius: 15px;
        color: white;
        font-family: fjella;
        font-size: 17px;
        margin: 10px 0px 50px 0px;
    }

    #login-btn:hover {
        background-color: #3F37C9;
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
                <a id="logout-btn" href="https://st-alphonsus-primary-school.netlify.app/">Back Home</a>
            </nav>

            <div id="login_part">
                <h2 id="login-text">Log In</h2>
                <form method="post" id="form">
                    <input type="text" name="user_name" class="input-lg" placeholder="Username">
                    <input type="password" name="password" class="input-lg" placeholder="Password">
                    <input type="submit" value="Log In" id="login-btn">
                </form>
            </div>
        </div>
    </body>
</html>