<?php
$host = 'mysql.itn.liu.se';
$user = 'lego';
$pass = '';
$db = 'lego';

$dsn = "mysql:dbname=$db;host=$host;charset=utf8";

$settings = array(
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
);

try {
    $dbm = new PDO($dsn, $user, $pass, $settings);
} catch (PDOException $e) {
    echo 'Kunde inte koppla mot db.<br>'.$e->getMessage();
    exit;
}

     function runQuery($query, $fetch = true, array $data)
     {
         global $dbm;
         try {
             $stmt = $dbm->prepare($query);
             $stmt->execute($data);
             if ($fetch) {
                 return $stmt->fetchAll();
             }
         } catch (PDOException $e) {
             echo 'Frågan gick åt skogen. Förklaring:<br>'
        .$e->getMessage();
             exit;
         }
     }
