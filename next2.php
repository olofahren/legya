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
    <h1>Lego City</h1>
        <div class="box1">
        <div class="part-box">
            <div class="part-pic-container">
                <img src="lego-city.jpg" alt="image" class="lego-pic">
            </div>
            <div class="part-info">
                
                <p class="info">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                </p>
               
            </div>
        </div>
    
    </div>

    



    </div>
    </div>


</div>


<script src="script.js"></script>

</body>
</html>