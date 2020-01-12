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
        <?php
        //Inkluderar meny och mobilmeny.
        include("menu.html");
        include("mobile-header.html")
       ?>
        <button class ="back-btn" onclick="goBack()">Go Back</button>
        <div class="results">
            <h1>Parts in <?php echo $_GET["SetID"]?></h1>
            <div class="box1">
                <?php 
                //Om det finns delar i satsen visas rubrikerna upp       
                if($_SESSION["setParts"]){ 
                echo "<table class='table'>
                    <tr>
                        <th>Quantity</th>
                        <th>Picture</th>
                        <th>Color</th>
                        <th>Part name</th>
                    </tr>";
                    }
                    //Om det inte finns delar visas ett errormedelande upp.
                    if(!$_SESSION["setParts"]){
                        echo "<h2>No parts were found in this set!</h2>";
                    }
                    //Om det finns delar i satsen visas dessa upp
                    else{
                    foreach ($_SESSION["setParts"] as $part) {
                ?>
                <tr>    
                    <td><?= $part['Quantity']?></td>
                    <?php if($part['ItemTypeID'] == 'P') { ?>
                    <td ><img class="legoImg" src="http://weber.itn.liu.se/~stegu76/img.bricklink.com/P/<?= $part['ColorID']?>/<?= $part['ItemID']?>" alt="part image"></td>
                    <?php } else {?>
                    <td ><img class="legoImg" src="http://weber.itn.liu.se/~stegu76/img.bricklink.com/M/<?= $part['ItemID']?>" alt="part image"></td>
                    <?php }?>
                    <td><?= $part['Colorname']?></td>
                    <td><?= $part['Partname']?></td>
                </tr>
            <?php }
            echo "</table>";
        }?>
        </div>
    </div>
    </div>


    <script src="script.js"></script>

</body>
</html>