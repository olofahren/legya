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
    <link href="https://fonts.googleapis.com/css?family=PT+Sans+Narrow&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Legya</title>
</head>
<body>
    <div class="wrapper">
        <div class="main">
       <?php
    //    Inkluderar menyer, både för mobil och för desktop.
            include("menu.html");
            include("mobile-header.html");
       ?>

        <div class="content">
            <div class="search">
            <img class="airplane" src="https://ideascdn.lego.com/media/generate/lego_ci/7b115add-2662-4114-b611-2786e9045efd/resize:800:450" alt="">
            <img src="http://www2.leaseweb.com/rs/326-LAN-349/images/Hybrid_lego_2.png" alt="" class="cloud">
            <img src="http://www2.leaseweb.com/rs/326-LAN-349/images/Hybrid_lego_2.png" alt="" class="cloud2">
            <a href="index.php"><img src="assets/logg.png" alt="Logo" class="logo"></a>

                    <form method="GET" action="index.php" class="search-form">
                            <input type="text" placeholder="Search for sets..." id="search-field" name="key" required>
                            <input type="submit" value="&#x1F50E;" class="search-btn">
                    </form>
        </div>
        <?php
        // Om ett ett sökord finns visas sorteringsalternativen och resultaten
            if ($_GET["key"]) {
                include("sort.php");
                include("app/action/displayResults.php");
            }
            else{
                echo "<h2>Enter a search term to search for a lego set.</h2>";
            }
            
            ?>   
    </div>
    </div>

    <img src="https://gallery.yopriceville.com/var/resizes/Free-Clipart-Pictures/Grass-Grounds-Coverings-PNG-Clipart/Mountain_and_Meadow_Ground_PNG_Cartoon_Image.png?m=1530032543" alt="Footer image" class="footer">
    <script src="script.js"></script>
        </div>
</body>
</html>