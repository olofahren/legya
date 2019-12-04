<?php
session_start();
include("../conn.php");

//WARNING!!!!
//ADD mysql_real_escape_string() or OTHER similar method
$searchKeys = $_POST["key"];

$keyWords = explode(",", $searchKeys);
var_dump($keyWords);
$query = "SELECT setName FROM sets JOIN inventory ON sets.setID = inventory.setID";

$data = array($keyWords[0]);

$resultArray = runQuery($query, true, array($keyWords[0]));
var_dump($resultArray);


/*
Visa alla satser som innehåller eftersökta bitar  

SELECT setName FROM sets JOIN ON sets.setID = inventory.itemID WHERE sets.setID LIKE '%".$keyWords[0]."%';
SELECT setName FROM sets WHERE setName LIKE '%".$keyWords[0]."%';
SELECT Setname FROM sets JOIN sets.SetID = inventory.ItemID WHERE inventory.ItemID LIKE cat;
SELECT Setname FROM sets JOIN inventory ON sets.SetID = inventory.SetID WHERE inventory.ItemID = ;
SELECT Partname FROM parts JOIN inventory JOIN sets ON sets.SetID = inventory.SetID WHERE inventory.ItemID = 4056;
*/