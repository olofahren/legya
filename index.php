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
            <div class="search">
                <h2>Add lego brick</h2>
                
                <div class="form">
                    <form action="app/action/searchAction.php" method="POST">
                        
                            <input type="text" id="searchField" name="key" value="">
                            <input type="submit" value="Search" class="search.function">
                    
                    </form>
            </div>
            <div class="list-container">
                <ul id="brick-list">

                </ul>
            </div>
        </div>
    </div>

    <script src="script.js"></script>

</body>
</html>