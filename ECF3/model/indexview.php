<?php
// Inclure le fichier de connexion à la base de données
require_once "connexionBDD.php";

// Définition de la fonction ColorAmbree
function Article()
{
    // Récupérer l'instance de PDO à partir de la fonction getPDO()
    $response = getPDO()->prepare(
        // Requête SQL pour récupérer les articles de couleur "Ambree" avec des jointures sur les tables associées
        "SELECT * FROM article a
            INNER JOIN marque m ON m.ID_MARQUE = a.ID_MARQUE
            INNER JOIN couleur c ON c.ID_COULEUR = a.ID_COULEUR
            INNER JOIN typebiere t ON t.ID_TYPE = a.ID_TYPE"

    );
    // Exécuter la requête SQL
    $response->execute();

    // Retourner toutes les lignes résultantes sous forme de tableau associatif
    return $response->fetchAll(PDO::FETCH_ASSOC);
}
