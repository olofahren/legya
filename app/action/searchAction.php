<?php
session_start();
include("app/conn.php");

//Hanterar filteralternativen 
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
    $sort = "score";
}

if ($_GET["order"]) {
    $order = filter_input(INPUT_GET, "order", FILTER_SANITIZE_SPECIAL_CHARS);
}
else{
    $order = "desc";
}

//Filterar sökorden
$searchKey = filter_input(INPUT_GET, "key", FILTER_SANITIZE_SPECIAL_CHARS);

//Behandlar sökorden och ställen frågan till databasen
//Separerar sökorden och söker på dem i olika följd. 
$searchKey = str_replace(" ", "* ", $searchKey);
$searchKey .= "*";
//Söker efter satser och ger de en poäng beroende på hur likt satsnamnet är mot sökningen. De resultat som är mest lika får högre "score".
//De olika filtren bygger också om frågan för att anpassa sökresultaten. 
$query = "SELECT sets.Setname, sets.SetID, sets.Year, MATCH(SetID, Setname) AGAINST('$searchKey' IN BOOLEAN MODE) AS score from sets
             WHERE MATCH(SetID, Setname) AGAINST('$searchKey' IN BOOLEAN MODE) ORDER BY $sort $order LIMIT $limit";
//Frågan ställs till datanasen.
$data = array($searchKey);
$results= runQuery($query, true, $data);
