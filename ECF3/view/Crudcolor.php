<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Configuration de la page -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Bieres</title>
    <!-- Lien vers la feuille de style Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <!-- Barre de navigation Bootstrap -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="../view/indexview.php">Ma Brasserie</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Contenu de la barre de navigation -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">

                <!-- Liens vers différentes pages -->
                <li class="nav-item">
                    <a class="nav-link" href="../view/indexview.php">Accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../view/colorBlonde.php">Bière Blonde</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../view/colorBrune.php">Bière Brune</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../view/colorBlanche.php">Bière Blanche</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../view/colorAmbree.php">Bière Ambrée</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../view/Crudcolor.php">Crud couleur</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../view/CrudArticle.php">Crud article</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Style CSS en ligne pour le fond de la page -->
    <style>
        body {
            background-color: #F8F8E7;
            /* Couleur de fond de la page */
        }
    </style>

    <!-- Conteneur principal -->
    <div class="container">
        <!-- En-tête pour ajouter une couleur de bière -->
        <h2 class="text-left text-dark font-weight-bold mb-4">Ajouter une couleur de bière</h2>

        <!-- Formulaire d'ajout, modification et suppression -->
        <form method="POST">
            <div class="form-group">
                <label for="nom">Nom de la couleur :</label>
                <input type="text" class="form-control" id="nom" name="nomCouleur" required>
            </div>
            <div class="form-group">
                <label for="nom">id de la couleur :</label>
                <input type="text" class="form-control" id="nom" name="id_couleur" required>
            </div>

            <!-- Boutons pour les actions du formulaire -->
            <button type="submit" name="Bouton_ajouter" class="btn btn-primary">Ajouter</button>
            <button type="submit" name="Bouton_modifier" class="btn btn-primary">Modifier</button>
            <button type="submit" name="Bouton_supprimer" class="btn btn-primary">Supprimer</button>
        </form>
    </div>

    <!-- En-tête pour la partie CRUD simple -->
    <br>
    <h2 class="text-left text-dark font-weight-bold mb-4">Ma partie CRUD simple</h2>


    <!-- Liste des couleurs en utilisant Bootstrap List Group -->
    <ul class="list-group">
        <?php
        require_once('../Controller/CrudColor.php');
        $couleurs = CrudSelectcolor();
        foreach ($couleurs as $couleur) : ?>
            <li class="list-group-item"><?php echo $couleur["NOM_COULEUR"]; ?></li>
        <?php endforeach; ?>
    </ul>

    <!-- Pied de page fixé en bas de la page -->
    <footer class="fixed-bottom bg-dark text-white text-center py-2">
        <p>&copy; 2023 Ma Brasserie</p>
    </footer>


</body>

</html>