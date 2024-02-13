<?php
// Inclure le fichier de connexion à la base de données
require_once "connexionBDD.php";

// Fonction pour sélectionner toutes les couleurs
function CrudSelectcolor()
{
    // Préparer la requête SQL pour sélectionner toutes les couleurs de la table 'couleur'
    $response = getPDO()->prepare(
        'SELECT * FROM couleur '
    );
    // Exécuter la requête SQL
    $response->execute();
    // Retourner toutes les lignes résultantes sous forme de tableau associatif
    return $response->fetchAll(PDO::FETCH_ASSOC);
}

function CrudCount()
{
    // Préparer la requête SQL pour compter le nombre de couleurs dans la table 'couleur' pour un ID spécifique
    $response1 = getPDO()->prepare("SELECT COUNT(*) AS total FROM couleur WHERE ID_COULEUR = :ID_COULEUR");

    // Liaison du paramètre avec la valeur fournie en argument
    $response1->bindParam(':ID_COULEUR', $id, PDO::PARAM_INT);

    // Exécuter la requête SQL
    $response1->execute();

    // Retourner le résultat sous forme d'entier (nombre total)
    return (int)$response1->fetchColumn();
}


// Fonction pour ajouter une couleur
function CrudAddcolor()
{
    // Récupération des valeurs depuis le formulaire POST
    $Nom_Couleur = $_POST['nomCouleur'];
    $id = $_POST['id_couleur'];

    // Vérification si l'ID_COULEUR existe déjà
    $checkIdQuery = getPDO()->prepare("SELECT COUNT(*) FROM couleur WHERE ID_COULEUR = :ID_COULEUR");
    $checkIdQuery->bindParam(':ID_COULEUR', $id);
    $checkIdQuery->execute();

    $count = $checkIdQuery->fetchColumn();

    // Si l'ID_COULEUR existe déjà, affiche un message et ne procède pas à l'insertion
    if ($count > 0) {
        echo "<div class='bg-danger'>Votre Id existe déja !</div>";
        return;
    } else {

        // Préparer la requête SQL pour insérer une nouvelle couleur dans la table 'couleur'
        $insertQuery = getPDO()->prepare("INSERT INTO couleur (ID_COULEUR, NOM_COULEUR) VALUES (:ID_COULEUR, :NOM_COULEUR)");

        // Liaison des paramètres avec les valeurs récupérées depuis le formulaire POST
        $insertQuery->bindParam(':ID_COULEUR', $id);
        $insertQuery->bindParam(':NOM_COULEUR', $Nom_Couleur);

        // Exécuter la requête SQL
        $insertQuery->execute();
        echo "<div class='bg-success'>votre couleur a été ajoutée</div>";
    }
}

// Fonction pour modifier une couleur
function modifier_color()
{
    // Récupérer les valeurs depuis le formulaire POST
    $newColor = $_POST['nomCouleur'];
    $id = $_POST['id_couleur'];

    // Préparer la requête SQL pour mettre à jour la couleur dans la table 'couleur'
    $stmt = getPDO()->prepare("UPDATE couleur SET NOM_COULEUR = :nouvelle_couleur WHERE ID_COULEUR = :id_couleur");
    // Exécuter la requête SQL avec les nouvelles valeurs
    $stmt->execute([':nouvelle_couleur' => $newColor, ':id_couleur' => $id]);
    echo "<div class='bg-success'>votre couleur a été modifiée</div>";
}

// Fonction pour supprimer une couleur
function supprimer_color()
{
    // Récupérer les valeurs depuis le formulaire POST
    $newColor = $_POST['nomCouleur'];
    $id = $_POST['id_couleur'];

    // Préparer la requête SQL pour supprimer la couleur de la table 'couleur'
    $stmt = getPDO()->prepare("DELETE FROM couleur WHERE ID_COULEUR = :id_couleur");
    // Exécuter la requête SQL avec l'ID de la couleur à supprimer
    $stmt->execute([':id_couleur' => $id]);
    echo "<div class='bg-success'>votre couleur a été supprimée</div>";
}
