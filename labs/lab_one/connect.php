<?php

$dsn = 'mysql:host=localhost;dbname=__________';
$user = 'root'; 
$password = 'root'; 

try {
$db = new PDO($dsn, $user, $password); 
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}
catch(PDOException $e) {
    echo "<p>Unable to establish a connection" . $e->getMessage();

}
