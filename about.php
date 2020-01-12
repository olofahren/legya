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
<?php
       //Inkluderar meny och mobilmeny.
        include("menu.html");
        include("mobile-header.html")
       ?>
       <div class="content"> 
       <div class="about_content">
              <h1> How to search</h1>
              <p> On this website you can search for legosets and find more information about which parts belong to the set. </p>
              <br/><br/>  

              <ul>
              <li>Write keyword or setname in the search box.</li>
              <li>Press the searchbutton to search for sets.</li>
              <li>Choose which set you would like to read more about.</li>
              </ul> 

             
       </div>
       </div> 
</div>

<script src="script.js"></script>
</body>
</html>