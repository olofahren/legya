<?php
session_start();
include("../conn.php");

//Hämtar och rensar SetID av satsen vars innehåll ska visas.
$SetID = $_GET["SetID"];
$SetID = filter_input(INPUT_GET, "SetID", FILTER_SANITIZE_SPECIAL_CHARS);

//Frågar efter delar och minifigurer som ingår i en viss sats
$query = 
"SELECT
    inventory.SetID,
    inventory.Quantity,
    colors.Colorname,
    parts.Partname,
    inventory.ItemTypeID,
    inventory.ItemID,
    colors.ColorID
FROM
    inventory,
    colors,
    parts 
WHERE
    inventory.SetID='$SetID'
AND inventory.ItemtypeID='P'
AND colors.ColorID=inventory.ColorID
AND parts.PartID=inventory.ItemID
UNION
SELECT
    inventory.SetID,
    inventory.Quantity,
    colors.Colorname,
    minifigs.Minifigname,
    inventory.ItemTypeID,
    minifigs.MinifigID,
    colors.ColorID
FROM
    inventory,
    minifigs,
    colors 
WHERE
    inventory.SetID='$SetID'
AND inventory.ItemtypeID='M'
AND minifigs.MinifigID=inventory.ItemID
AND colors.ColorID='0'";

//Ställer frågan till databasen med runQuery()-funtionen
$data = array($SetID);
$_SESSION["setParts"] = runQuery($query, true, $data);

header("Location: ../../next2.php?SetID=$SetID");
