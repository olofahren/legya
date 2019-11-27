<?php
session_start();
//include("../conn.php");

//WARNING!!!!
//ADD mysql_real_escape_string() or OTHER similar method
$searchKeys = $_POST["key"];

$keyWords = explode(",",$searchKeys);

var_dump($keyWords);