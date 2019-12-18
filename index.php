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
       ?>
        <div class="content">
            <div class="search">
                <h2>Search </h2>
                
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
            
            ?>   
    </div>

    <script src="script.js"></script>

</body>
</html>