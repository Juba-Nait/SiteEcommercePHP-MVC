<?php

// Pour éviter l'affichage des avertissements (warning)
ini_set('display_errors', '1');

// Etablir la connexion avec la BDD
require_once('connexionBDD.php');

// Fonction pour lire les articles en fonction de l'ID
function ReadArticle()
{
    // Récupérer l'ID de l'article depuis le formulaire POST
    $ID_ARTICLE = isset($_POST['ID_ARTICLE']) ? $_POST['ID_ARTICLE'] : null;


    // Préparer la requête SQL pour sélectionner les détails de l'article
    $response = getPDO()->prepare(
        'SELECT * FROM article a
            INNER JOIN marque m ON m.ID_MARQUE = a.ID_MARQUE
            INNER JOIN couleur c ON c.ID_COULEUR = a.ID_COULEUR
            INNER JOIN typebiere t ON t.ID_TYPE = a.ID_TYPE
            WHERE a.ID_ARTICLE= :idArticle'
    );
    // Exécuter la requête SQL avec l'ID de l'article
    $response->execute([':idArticle' => $ID_ARTICLE]);

    $response->execute();

    // Retourner les résultats sous forme de tableau associatif
    return $response->fetchAll(PDO::FETCH_ASSOC);
}

// Fonction pour ajouter un nouvel article
function CrudAddArticle()
{
    // Récupération des valeurs depuis le formulaire POST
    $ID_COULEUR = $_POST['ID_COULEUR'];
    $NOM_ARTICLE = $_POST['NOM_ARTICLE'];
    $VOLUME = $_POST['VOLUME'];
    $PRIX_ACHAT = $_POST['PRIX_ACHAT'];
    $TITRAGE = $_POST['TITRAGE'];
    $ID_MARQUE = $_POST['ID_MARQUE'];
    $ID_TYPE = $_POST['ID_TYPE'];

    // Préparer la requête SQL pour insérer un nouvel article dans la table 'article'
    $response = getPDO()->prepare("INSERT INTO article (NOM_ARTICLE, VOLUME, PRIX_ACHAT, TITRAGE, ID_MARQUE, ID_TYPE, ID_COULEUR)
     VALUES (:NOM_ARTICLE, :VOLUME, :PRIX_ACHAT, :TITRAGE, :ID_MARQUE, :ID_TYPE, :ID_COULEUR)");

    // Liaison des paramètres avec les valeurs POST
    $response->bindParam(':NOM_ARTICLE', $NOM_ARTICLE);
    $response->bindParam(':ID_COULEUR', $ID_COULEUR);
    $response->bindParam(':VOLUME', $VOLUME);
    $response->bindParam(':PRIX_ACHAT', $PRIX_ACHAT);
    $response->bindParam(':TITRAGE', $TITRAGE);
    $response->bindParam(':ID_MARQUE', $ID_MARQUE);
    $response->bindParam(':ID_TYPE', $ID_TYPE);

    // Exécuter la requête SQL
    $response->execute();
}

// Fonction pour modifier un article
function Crud_modifier_Article()
{
    // Récupérer les valeurs depuis le formulaire POST
    $ID_ARTICLE = isset($_POST['ID_ARTICLE']) ? $_POST['ID_ARTICLE'] : null;
    $ID_COULEUR = $_POST['ID_COULEUR'];
    $NOM_ARTICLE = $_POST['NOM_ARTICLE'];
    $VOLUME = $_POST['VOLUME'];
    $PRIX_ACHAT = $_POST['PRIX_ACHAT'];
    $TITRAGE = $_POST['TITRAGE'];
    $ID_MARQUE = $_POST['ID_MARQUE'];
    $ID_TYPE = $_POST['ID_TYPE'];


    // Préparer la requête SQL pour mettre à jour l'article dans la table 'article'
    $stmt = getPDO()->prepare(
        "UPDATE article SET NOM_ARTICLE = :NOM_ARTICLE, PRIX_ACHAT = :PRIX_ACHAT, VOLUME = :VOLUME, TITRAGE = :TITRAGE, ID_MARQUE = :ID_MARQUE, ID_COULEUR = :ID_COULEUR, ID_TYPE = :ID_TYPE
            WHERE ID_ARTICLE = :ID_ARTICLE"
    );

    // Liaison des paramètres avec les valeurs POST
    $stmt->bindParam(':ID_ARTICLE', $ID_ARTICLE);
    $stmt->bindParam(':NOM_ARTICLE', $NOM_ARTICLE);
    $stmt->bindParam(':PRIX_ACHAT', $PRIX_ACHAT);
    $stmt->bindParam(':VOLUME', $VOLUME);
    $stmt->bindParam(':TITRAGE', $TITRAGE);
    $stmt->bindParam(':ID_MARQUE', $ID_MARQUE);
    $stmt->bindParam(':ID_COULEUR', $ID_COULEUR);
    $stmt->bindParam(':ID_TYPE', $ID_TYPE);

    // Exécuter la requête SQL
    $stmt->execute();
}
// Fonction pour supprimer un article
function Crud_supprimer_Article()
{
    // Récupérer l'ID de l'article depuis le formulaire POST
    $ID_ARTICLE = isset($_POST['ID_ARTICLE']) ? $_POST['ID_ARTICLE'] : null;

    // Préparer la requête SQL pour supprimer l'article de la table 'article'
    $stmt = getPDO()->prepare("DELETE FROM article WHERE ID_ARTICLE = :id_article");

    // Exécuter la requête SQL avec l'ID de l'article à supprimer
    $stmt->execute([':id_article' => $ID_ARTICLE]);
}
