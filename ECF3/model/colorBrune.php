<?php

// Inclusion du fichier de connexion à la base de données
require_once "connexionBDD.php";
// Fonction pour récupérer les articles de couleur brune
function ColorBrune()
{
    // Préparation de la requête SQL avec des jointures
    $response = getPDO()->prepare(
        "SELECT * FROM article a
            INNER JOIN marque m ON m.ID_MARQUE = a.ID_MARQUE
            INNER JOIN couleur c ON c.ID_COULEUR = a.ID_COULEUR
            INNER JOIN typebiere t ON t.ID_TYPE = a.ID_TYPE
            WHERE c.NOM_COULEUR = 'Brune'"
    );

    // Exécution de la requête préparée
    $response->execute();
    // Récupération des résultats sous forme de tableau associatif
    return $response->fetchAll(PDO::FETCH_ASSOC);
}
include "../controller/colorBrune.php";
