<?php
session_start();
$_SESSION["items"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link href="https://fonts.googleapis.com/css?family=Varela+Round&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Legya</title>
</head>
<body>
<div class="wrapper">
       <?php include("menu.html");
       ?>
    <div class="content results">
    
    <div class="box1">
        <div class="lego-box">
            <div class="lego-pic-container">
                <img src="lego-city.jpg" alt="image" class="lego-pic">
            </div>
            <div class="lego-info">
                <h4 class="setName">Lego city</h4>
                <p class="info">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                </p>
                <div class="more-info">
                    <h5><a href="next2.php"> More info </a></h5>
                </div>
            </div>
        </div>
        <div class="lego-box"></div>
    </div>

    <div class="box2">
        <div class="lego-box"></div>
        <div class="lego-box"></div>
    </div>
    



    </div>
    </div>


</div>


<script src="script.js"></script>

</body>
</html>