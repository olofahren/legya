<?php
session_start();

if ($_GET["key"]) {
    include("app/action/searchAction.php");
}

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
        if ($_GET["key"]) {
            include("sort.php");
        }
       
       ?>
       
        <div class="content">
            
            <div class="search">
            <img class="airplane" src="https://ideascdn.lego.com/media/generate/lego_ci/7b115add-2662-4114-b611-2786e9045efd/resize:800:450" alt="">
            <img src="http://www2.leaseweb.com/rs/326-LAN-349/images/Hybrid_lego_2.png" alt="" class="cloud">
            <img src="http://www2.leaseweb.com/rs/326-LAN-349/images/Hybrid_lego_2.png" alt="" class="cloud2">
                <h2 class="search-text">LEGYA</h2>
                <div class="form">
                    <form method="GET" action="">
                            <input type="text" id="searchField" name="key">
                            <input type="submit" value="Search" class="search.function">
                    </form>
                </div>
            
 
        </div>
        <?php
            if ($_GET["key"]) {
                include("app/action/displayResults.php");
            }
            
            
            if (!$results && $_GET["key"]) {
            echo "<h3>Sorry, no results were returned by your search. Try again with another keyword.<h3>";
            }

            
            ?>   
    </div>

    <div class="footer">
        
    </div>

    <script src="script.js"></script>

</body>
</html>