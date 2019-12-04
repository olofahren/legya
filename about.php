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
       <div class="about_content">
              <h1> ABOUT LEGYA</h1>
              <p> Legya was created by four students at Linköpings University in 2019. The website's purpose is to help people find which set their lego pieces belong to!!!  </p>

              <h2> How to search in LEGYA </h2>
              <p> Write the part-ID in the search box. Press "add item" to add the piece to a list. Repeat the process until you have added everything to list. 
              Then, press the search button to move to the next step. </p>
              <br />
              <p>Your parts will then be sorted into which set they belong to. You can click on each set to read more.</p>
             
       </div>       
</div>


</body>
</html>