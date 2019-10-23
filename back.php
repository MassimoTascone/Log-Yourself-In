<?php

function openConnection(){
    $dbhost = "database";
    $dbuser = "root";
    $dbpass = "root";
    $db = "mydb";

    
    try {
        $pdo = new PDO("mysql:host=$dbhost;dbname=$db",$dbuser,$dbpass);
        echo "VICTORY!";
    }

    catch (PDOException $e) {
        echo "ca merch po";
    }
}

openConnection();


?>