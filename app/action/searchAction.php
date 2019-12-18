<?php
session_start();
include("app/conn.php");


if ($_GET["limit"]) {
    $limit = filter_input(INPUT_GET, "limit", FILTER_SANITIZE_SPECIAL_CHARS);
}
else{
    $limit = 20;    
}
$searchKey = filter_input(INPUT_GET, "key", FILTER_SANITIZE_SPECIAL_CHARS);

$query = "SELECT * FROM sets WHERE Setname LIKE '%$searchKey%' LIMIT $limit";
$data = array($searchKey);

$results= runQuery($query, true, $data);
