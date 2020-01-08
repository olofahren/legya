<?php
session_start();
include("../conn.php");

$SetID = $_GET["SetID"];
$SetID = filter_input(INPUT_GET, "SetID", FILTER_SANITIZE_SPECIAL_CHARS);

//$query = "SELECT inventory.SetID, inventory.ItemID, minifigs.Minifigname FROM inventory, minifigs
//WHERE inventory.SetID='$SetID' AND inventory.ItemtypeID='P' AND minifigs.MinifigID=inventory.ItemID";
$query = "SELECT inventory.SetID, inventory.Quantity, colors.Colorname, parts.Partname, inventory.ItemTypeID, inventory.ItemID, colors.ColorID FROM inventory, colors, parts 
WHERE inventory.SetID='$SetID' AND inventory.ItemtypeID='P' AND colors.ColorID=inventory.ColorID AND parts.PartID=inventory.ItemID";
$data = array($SetID);

$_SESSION["setParts"] = runQuery($query, true, $data);

header("Location: ../../next2.php?SetID=$SetID");
