<?php
    require_once('connection.php');
    if (isset($_POST['submit'])){
        $name = $_POST['name'];
        $content =$_POST['content'];
    

    $sql = "INSERT INTO  feature_data (feature,name) VALUES (?,?)";
            $stmt= $pdo->prepare($sql);
            $x = $stmt->execute([$content,$name,]);

            if ($x) {
                // $emsg ='Thank You for the Suggestion.';
                // echo "<script type='text/javascript'>alert('$emsg');</script>";
                echo "<script>
                alert('Thank You for the Suggestion.');
                window.location.href='index.php?post=success';  
                </script>";
            }
            else {
                $emsg ='Sorry This Cannot be Posted.';
                echo "<script type='text/javascript'>alert('$emsg');</script>";
                header( 'Location: index.php?post=failed'  );
            }
   }

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>#Gobeyond | Feature Request</title>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css?family=Abel" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">
        <link rel="stylesheet" type="text/css" media="screen" href="styles.css"/>
        <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js" integrity="sha384-kW+oWsYx3YpxvjtZjFXqazFpA7UP/MbiY4jvs+RWZo2+N94PFZ36T6TFkc9O3qoB" crossorigin="anonymous"></script>
    </head>
    <body>
        <!--------------------------------- BODY CONTENT  ------------------------------------->
        <div class="container">
            <div class="row">
                <div class="col-2"></div>
                <div class="col-8 feature-form">
                    <p class="text-center" style="color: white;"><strong>Your Suggestions will surely help in making this a good place to learn for everyone. <br> #GoBeyond</strong></p>
                    <form action="index.php" method="POST">
                        <div class="form-group">
                            <textarea class="form-control content" id="exampleFormControlTextarea1" rows="8" placeholder="Enter Your Suggestions / Feature" required name="content"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control name" id="exampleFormControlInput1" placeholder="Enter Your Name" required name="name">
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn sendit" name="submit">Send it</button>
                        </div>
                    </form>
                    <div class="text-center link" >
                        <a href="" data-toggle="modal" data-target="#exampleModalCenter">
                            <em>List of features to be added.</em>
                        </a>
                    </div>
                    
                    <!-- Modal -->
                    <div class="modal fade " id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <div class="container">
                                        <ul>
                                            <li> <span class="done"> Basic UI</span> &nbsp; COMPLETED </li>
                                            <li> <span class="done">User Registeration & Login </span> &nbsp;COMPLETED</li>
                                            <li> <span  class="done">Editorial Section </span>&nbsp; COMPLETED</li>
                                            <li> <span>Downloads Section </span> </li>
                                            <li> <span>Daily Updated Section (TBA)</span> </li>
                                            <li> <span>Best Of youtube </span></li>
                                            <li> <span>Dictionary Api </span></li>
                                            <li> <span>Ebooks Section </span></li>
                                            <li> <span>Daily Newspapers Section </span></li>
                                            <li> <span>Text to Speech Api </span></li>
                                            <li> <span>User Notifications </span></li>
                                            <li> <span>User Community </span></li>
                                            <li> <span>Quiz (Online Test) </span></li>
                                        </ul>
                                    </div>
                                    <p>Much More to Come Here As I get Some Useful and interesting thing to implement.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-2"></div>
            </div>
            
            
        </div>

        <footer >
                <div class=" container text-center"> 
                <p> Created with Curiosity |&nbsp;&copy; All Rights Reserved</p>
                </div>

        </footer>
        <!------------------------------------Bootsrap JS--------------------------------------->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </body>
</html>