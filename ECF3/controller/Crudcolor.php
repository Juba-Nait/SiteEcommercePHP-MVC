<?php
require_once "../model/CrudColor.php";


if (isset($_POST["Bouton_ajouter"])) {
    $Addcolor = CrudAddcolor();
    $couleurs = CrudSelectcolor();
}


if (isset($_POST["Bouton_modifier"])) {
    $modifier_color = modifier_color();
    $couleurs = CrudSelectcolor();
}

if (isset($_POST["Bouton_supprimer"])) {
    $supprimer_color = supprimer_color();
    $couleurs = CrudSelectcolor();
}

$couleurs = CrudSelectcolor();
