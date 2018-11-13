<?php
session_start();
// echo("{$_SESSION['u_name']}"."<br />");
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Beyond-Prep | Go Beyond Preparation</title>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css?family=Abel" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet"> 
        <link rel="stylesheet" type="text/css" media="screen" href="/css/styles.css" />
        <link rel="stylesheet" type="text/css" media="screen" href="/css/login.css" />
        <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js" integrity="sha384-kW+oWsYx3YpxvjtZjFXqazFpA7UP/MbiY4jvs+RWZo2+N94PFZ36T6TFkc9O3qoB" crossorigin="anonymous"></script>
        
    </head>
    <body>
        <script src="/js/script.js"></script>
        <!--------------------------------NAVIGATION BAR STARTS------------------------------------>
        <nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark ">
            <a class="navbar-brand" href="index.php">
                <img src="/img/a.png" width="30" height="30" class="d-inline-block align-top" alt="">
                #GoBeyond
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ml-auto">
                    <a class="nav-item nav-link " href="index.php" onmousedown="return LinkClicked(this)">Home</a>
                    <a class="nav-item nav-link " href="quiz.php" onmousedown="return LinkClicked(this)">Quiz</a>
                    <a class="nav-item nav-link " href="ytube.php" onmousedown="return LinkClicked(this)">Youtube's Best</a>
                    <a class="nav-item nav-link " href="daily.php" onmousedown="return LinkClicked(this)">Daily</a>
                    <a class="nav-item nav-link " href="downloads.php" onmousedown="return LinkClicked(this)">Downloads</a>
                    <a class="nav-item nav-link " href="#" onmousedown="return LinkClicked(this)">About Us</a>
                    <!------ Change Login Button Here -------------->
                    <?php if (isset($_SESSION['u_uname']))
                    {
                    echo '<a class="nav-item nav-link" href="logout.php" onmousedown="return LinkClicked(this)">Logout</a>';
                    }
                    else
                    {
                    
                    echo '<a class="nav-item nav-link" href="login.php" onmousedown="return LinkClicked(this)">Login / Signup</a>';
                    }
                    ?>
                </div>
            </div>
        </nav>