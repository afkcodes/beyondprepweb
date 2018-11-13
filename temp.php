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
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css?family=Abel" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Niramit" rel="stylesheet">
        <link rel="stylesheet" type="text/css" media="screen" href="/css/styles.css" />
        <link rel="stylesheet" type="text/css" media="screen" href="/css/login.css" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        <script src="/js/script.js"></script>
    </head>
    <body>
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
                    <a class="nav-item nav-link " href="index.php">Home</a>
                    <a class="nav-item nav-link " href="quiz.php">Quiz</a>
                    <a class="nav-item nav-link " href="#">Youtube's Best</a>
                    <a class="nav-item nav-link " href="#">Daily</a>
                    <a class="nav-item nav-link " href="#">Downloads</a>
                    <a class="nav-item nav-link " href="#">About Us</a>
                    <!------ Change Login Button Here -------------->
                    <?php if (isset($_SESSION['u_uname']))
                    {
                    echo '<a class="nav-item nav-link" href="logout.php">Logout</a>';
                    }
                    else
                    {
                    echo '<a class="nav-item nav-link" href="login.php">Login / Signup</a>';
                    }
                    ?>
                </div>
            </div>
        </nav>
        <!--------------------------------NAVIGATION BAR ENDS------------------------------------>
        
        <!-----------------------------------------FOOTER ---------------------------------------->
        <footer ">
            <div class ="container">
                <!---------footer links--------->
                <div class="row ">
                    <div class="col-md-4 footer-links footer-text">
                        <p class= "" style="font-weight:bold;">Quick Links.</p>
                        <div class="row">
                            <div class="col-4">
                                <!-- <p class= "" style="font-weight:bold;">Quick Links</p> -->
                                <ul class="quicklinks">
                                    <li><a href="">Option 1</a></li>
                                    <li><a href="">Option 2</a></li>
                                    <li><a href="">Option 3</a></li>
                                    <li><a href="">Option 4</a></li>
                                </ul>
                            </div>
                            <div class="col-4">
                                <!-- <p class= "" style="font-weight:bold;">Quick Links</p> -->
                                <ul class="quicklinks">
                                    <li><a href="">Option 1</a></li>
                                    <li><a href="">Option 2</a></li>
                                    <li><a href="">Option 3</a></li>
                                    <li><a href="">Option 4</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                    <!-----------Social Buttons---------->
                    <div class="col-md-4 footer-social ">
                        <div class="row">
                            <div class="col-6 social-div">
                                <p style="font-weight:bold">Follow Me On. </p>
                                <ul class="social-icons">
                                    <li><a href=""><i class="fab fa-google-plus-g fa-2x"></i></a> </li>
                                    <li><a href=""><i class="fab fa-facebook-f fa-2x"></i> </a>  </li>
                                    <li><a href=""><i class="fab fa-twitter fa-2x"></i> </a>  </li>
                                    <li><a href=""><i class="fab fa-youtube fa-2x"></i> </a>  </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                    <!------ Footer Form------------->
                    <div class="col-md-4 footer-form">
                        <form action="">
                            <div class="form-group">
                                <label for="contactme" style="font-weight:bold">Contact Me.</label>
                                <textarea class="form-control" id="contactme" rows="3" placeholder= "Enter Your Query/Suggestions . ."></textarea><br>
                                <div class =" col-md-8 text-center">
                                    <button type="submit" class="btn btn-outline-primary float-right contact-btn">Send It</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <p class=" align-bottom text-center" >Created with Curiosity |&nbsp;&copy; All Rights Reserved  </p>
        </footer>
        <!------------------------------------Bootsrap JS--------------------------------------->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </body>
</html>