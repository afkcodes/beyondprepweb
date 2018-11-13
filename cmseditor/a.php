<?php

$dbhost = 'localhost';
$dbuser = 'ashish';
$dbpass = 'djmaza.com';
$dbname = 'users_data';


$conn = mysqli_connect($dbhost, $dbuser, $dbpass) or die ('Error connecting to mysql');
mysqli_set_charset($conn,"utf8");
$db_select = mysqli_select_db($conn, $dbname);
$result = mysqli_query( $conn,"SELECT * FROM editorial ORDER BY article_id DESC");


?>

<html>
    <head>
        <title> TEST MY CMS </title>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
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
        <div class="container">
            <?php 
                while ($row = mysqli_fetch_array($result)) {
                echo '<div class=ed_links><a href ="article.php?article_id='.base64_encode($row['0']).'"> ' .($row['1']) . ' </a></div>';
                }

             ?>
        </div>
    </body>
</html>