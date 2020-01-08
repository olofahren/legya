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
            
        <div class="results">
            <h1>Parts in <?php echo $_GET["SetID"]?></h1>
            <div class="box1">
            <table class="table">
        <tr>
            <th>Quantity</th>
            <th>Picture</th>
            <th>Color</th>
            <th>Part name</th>
         </tr>
                <?php foreach ($_SESSION["setParts"] as $part) {
        ?>
            <tr>    
                <td><?= $part['Quantity']?></td>
                <td ><img class="legoImg" src="http://weber.itn.liu.se/~stegu76/img.bricklink.com/<?= $part['ItemTypeID']?>/<?= $part['ColorID']?>/<?= $part['ItemID']?>" alt="part image"></td>
                <td><?= $part['Colorname']?></td>
                <td><?= $part['Partname']?></td>
                <td><?= $part['MinifigID']?></td>
                <td><?= $part['ColorID']?></td>
                <td><?= $part['ItemID']?></td>
            </tr>
            <?php }?>
        </table>

            </div>
        </div>
    </div>
    </div>


    <script src="script.js"></script>

</body>
</html>