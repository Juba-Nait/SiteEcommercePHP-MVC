<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Encodage et configuration de la vue pour les appareils mobiles -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Liens vers la feuille de style Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <!-- Titre de la page -->
    <title>Ma Barre de Menu</title>
</head>

<body>
    <!-- Barre de navigation Bootstrap -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="../view/indexview.php">Ma Brasserie</a>
        <!-- Bouton de bascule pour les écrans plus petits -->
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
        <!-- En-tête de la page -->
        <h3 class="display-4 text-left text-dark font-weight-bold">Liste de mes biéres</h3>


        <!-- Tableau Bootstrap pour afficher la liste d'articles -->
        <table class="table table-bordered">


            <thead>
                <!-- En-têtes du tableau -->
                <tr>
                    <th>ID Article</th>
                    <th>Nom Article</th>
                    <th>Prix Article</th>
                    <th>Volume</th>
                    <th>Titrage</th>
                    <th>ID Marque</th>
                    <th>ID Couleur</th>
                    <th>ID Type</th>
                </tr>
            </thead>

            <tbody>

                <?php
                // Boucle PHP pour afficher les articles
                require_once('../controller/index.php');

                foreach ($articles as $article) {
                ?>
                    <!-- Ligne du tableau avec les données de l'article -->

                    <tr>
                        <td>
                            <?php echo ucwords($article["ID_ARTICLE"]) ?>
                        </td>

                        <td>
                            <?php echo ucwords($article["NOM_ARTICLE"]) ?>
                        </td>
                        <td>
                            <?php echo ucwords($article["PRIX_ACHAT"]) ?>
                        </td>
                        <td>
                            <?php echo ucwords($article["VOLUME"]) ?>
                        </td>
                        <td>
                            <?php echo ucwords($article["TITRAGE"]) ?>
                        </td>
                        <td>
                            <?php echo ucwords($article["NOM_MARQUE"]) ?>
                        </td>
                        <td>
                            <?php echo ucwords($article["NOM_COULEUR"]) ?>
                        </td>
                        <td>
                            <?php echo ucwords($article["NOM_TYPE"]) ?>
                        </td>
                    </tr>
                <?php  } ?>
            </tbody>

        </table>


        <!-- Pied de page fixé en bas de la page -->
        <footer class="fixed-bottom bg-dark text-white text-center py-2">
            <p>&copy; 2023 Ma Brasserie</p>
        </footer>

</body>

</html>