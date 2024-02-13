<?php

// Fonction pour établir une connexion à la base de données
function getPDO()
{
    // Informations de connexion à la base de données
    $host = 'localhost'; // Adresse du serveur MySQL
    $dbname = 'sdbm_v2'; // Nom de la base de données
    $port = '3307'; // Port de connexion MySQL
    $username = 'root'; // Nom d'utilisateur MySQL
    $password = ''; // Mot de passe MySQL

    // Chaîne de connexion PDO
    $dsn = "mysql:host=$host;dbname=$dbname;port=$port";



    // Tentative d'établissement de la connexion à la base de données
    try {
        $bdd = new PDO($dsn, $username, $password);


        // Configuration pour utiliser l'encodage UTF-8
        $bdd->exec('SET NAMES "UTF8"');
    } catch (Exception $error) {
        // En cas d'erreur, affichage d'un message d'erreur et arrêt du script
        die('Une erreur s\'est produite lors de la connexion à votre base de données : ' . $error->getMessage());
    }


    // Retourne l'objet PDO représentant la connexion à la base de données
    return $bdd;
}
