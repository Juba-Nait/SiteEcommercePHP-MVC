<?php
require_once "../model/CrudArticle.php";
// verifier si le fichier est déja inclus et si c'est le cas ne pas l'inclure une deuxieme fois

if (isset($_POST["Bouton_lire"])) {  //le isset détérmine si une variable est déclarée et est différente de null
    $ReadArticles = ReadArticle();
    echo "votre ligne a été lue";
}

if (isset($_POST["Bouton_ajouter_Article"])) {
    $CrudAddArticle = CrudAddArticle();
    $ReadArticles = ReadArticle();
    echo "votre article a été ajouté";
}

if (isset($_POST["Bouton_modifier_Article"])) {
    $Crud_modifier_Article =  Crud_modifier_Article();
    $ReadArticles = ReadArticle();
    echo "votre article a été modifié";
}

if (isset($_POST["Bouton_supprimer_Article"])) {
    $Crud_supprimer_Article = Crud_supprimer_Article();
    $ReadArticles = ReadArticle();
    echo "votre article a été supprimé";
}
