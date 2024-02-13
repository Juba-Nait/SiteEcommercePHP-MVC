<?php


$user = "root";

$pass = "";


try {
    $sdbm_v2 = new PDO('mysql:host=localhost;dbname=sdbm_v2', $user, $pass);
    echo "Connected...";
} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}
