<?php
session_start();

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
    
    <div class="lego-container">
    <?php 
    foreach ($_SESSION["results"] as $result) {
        
    
    ?>

    
        <div class="lego-box">
            <div class="lego-pic-container">

            <!-- FIXA HANTERING AV .gif OBS, ENDAST JPG FUNKAR JUST NU -->
                <img src="http://weber.itn.liu.se/~stegu76/img.bricklink.com/SL/<?php echo $result["SetID"]?>.jpg" alt="set-image" class="lego-pic">
            
  
            
            </div>
            <div class="lego-info">
                <h4 class="setName"><?php $result["Setname"]?></h4>
                <h5 class="set-title">Setname:</h5>
                    <p><?php echo $result["Setname"]?></p>
                <h5 class="set-title">Release year:</h5>
                    <p><?php echo $result["Year"] ?></p>
            
            </div>
            <div class="more-info">
                    <h5><a href="app/action/getParts.php?SetID=<?php echo $result["SetID"]?>"> More info </a></h5>
                </div>
        </div>


       <?php  
       
        }
       ?>
    </div>

    



    </div>
    </div>


</div>


<script src="script.js"></script>

</body>
</html>