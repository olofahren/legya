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
       <div class="content">
        <div class="about_content">
            <h1> About LEGYA</h1>
           <p>This website was created by four students at Linköping University, Campus Norrköping, in the course Electronic Publishing TNMK30. 
              The purpose of this website is to search for legosets and find more information about which parts that belong to the set. </p>
              <img src="gubbs.jpg" alt="Logo" width="600px">
              Cindy, Rebecca, Olof, Jane
        </div>
        </div>
    </div>


</body>

</html>