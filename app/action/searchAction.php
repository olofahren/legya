<?php
session_start();
include("app/conn.php");


if ($_GET["limit"]) {
    $limit = filter_input(INPUT_GET, "limit", FILTER_SANITIZE_SPECIAL_CHARS);
}
else{
    $limit = 18;    
}

if ($_GET["sort"]) {
    $sort = filter_input(INPUT_GET, "sort", FILTER_SANITIZE_SPECIAL_CHARS);
}
else{
    $sort = "Setname";
}

if ($_GET["order"]) {
    $order = filter_input(INPUT_GET, "order", FILTER_SANITIZE_SPECIAL_CHARS);
}
else{
    $order = "desc";
}


$searchKey = filter_input(INPUT_GET, "key", FILTER_SANITIZE_SPECIAL_CHARS);

$query = "SELECT * FROM sets  WHERE Setname LIKE '%$searchKey%' ORDER BY $sort $order LIMIT $limit ";
$data = array($searchKey);

$results= runQuery($query, true, $data);
