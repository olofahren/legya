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
       <div class="sorting">

       <!-- LIMIT -->
                <div class="select-display-amount" >
                    <form method="GET"> 
                        <input type="number" name="limit">
                        <input type="hidden" id="keyHidden" name="key" value="<?php echo $_GET["key"]?>">
                        <input type="hidden" id="orderHidden" name="order" value="<?php echo $_GET["order"]?>">
                        <input type="hidden" id="sortByHidden" name="sort-by" value="<?php echo $_GET["sort-by"]?>">
                        <input type="submit" value="Limit results">
                    </form>
                </div>
        

        <!-- SORT BY -->
                <div class="sort">
                    <form method="GET">
                        <select name="sort">
                            <option value="Setname">Alpabetical</option>
                            <option value="Year">Release date</option>
                        </select>
                        <input type="hidden" id="keyHidden" name="key" value="<?php echo $_GET["key"]?>">
                        <input type="hidden" id="limitHidden" name="limit" value="<?php echo $_GET["limit"]?>">
                        <input type="hidden" id="orderHidden" name="order" value="<?php echo $_GET["order"]?>">

                        <input type="submit" value="Change sorting">
                    </form>
                </div>
        <!-- ASC/DESC -->
                <div class="order">
                    <form method="GET">
                        <select name="order">
                            <option value="desc">Descending</option>
                            <option value="asc">Ascending</option>
                        </select>
                        <input type="hidden" id="keyHidden" name="key" value="<?php echo $_GET["key"]?>">
                        <input type="hidden" id="limitHidden" name="limit" value="<?php echo $_GET["limit"]?>">
                        <input type="hidden" id="sortHidden" name="sort" value="<?php echo $_GET["sort"]?>">

                        <input type="submit" value="Change sorting">
                    </form>
                </div>

        </div>

        <div class="content">
            
            <div class="search">
            <img class="airplane" src="https://img.pngio.com/archives-aircraft-cirrus-aircraft-propeller-plane-side-png-750_398.png" alt="">
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

    <div class="footer">
        
    </div>

    <script src="script.js"></script>

</body>
</html>