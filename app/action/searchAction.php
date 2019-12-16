<?php
session_start();
include("../conn.php");

//LÄGG TILL RENSNING AV INPUT

$searchKey = $_POST["key"];
$searchKey = filter_input(INPUT_POST, "key", FILTER_SANITIZE_SPECIAL_CHARS);
var_dump($searchKey);

$query = "SELECT * FROM sets WHERE Setname LIKE '%$searchKey%'";
$data = array($searchKey);

var_dump($data);
var_dump($query);
$_SESSION["results"] = runQuery($query, true, $data);

header("Location: ../../next.php");
