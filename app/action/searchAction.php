<?php
session_start();
include("../conn.php");

//WARNING!!!!
//ADD mysql_real_escape_string()
$searchKeys = mysql_real_escape_string($_POST["key"]);

$keyWords = explode(",",$searchKeys);

var_dump($keyWords);