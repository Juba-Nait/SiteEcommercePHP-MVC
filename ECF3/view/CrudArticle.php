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

    <?php
    // Inclure le modèle qui contient les fonctions liées à la gestion des articles
    require_once('../controller/CrudArticle.php');

    // Appeler la fonction ReadArticle pour récupérer les données des articles
    $ReadArticles = ReadArticle();
    ?>

    <!-- Style CSS en ligne pour le fond de la page -->
    <style>
        body {
            background-color: #F8F8E7;
            /* Couleur de fond de la page */
        }
    </style>

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



    <!-- Formulaire d'affichage, ajout, modification et suppression -->
    <form method="POST" class="container">
        <h1>Liste de mes bières</h1>

        <!-- Formulaire pour lire un article par son ID -->
        <div class="form-group col-md-1">
            <label for="nom"> id: </label>
            <input type="text" class="form-control" id="nom" name="ID_ARTICLE">
            <button type="submit" name="Bouton_lire" class="btn btn-primary">Lire</button>
        </div>

        <!-- Tableau Bootstrap pour afficher la liste des articles -->
        <table class="table table-bordered">
            <thead>
                <tr>
                    <!-- En-têtes du tableau -->
                    <th>Nom article</th>



                    <th>Prix Achat</th>


                    <th>Volume</th>


                    <th>Titrage</th>


                    <th>ID Marque</th>


                    <th>ID Type</th>


                    <th>ID Couleur</th>


                </tr>
            </thead>
            <tbody>

                <!-- Boucle PHP pour afficher les articles -->
                <?php
                foreach ($ReadArticles as $ReadArticle) : ?>

                    <!-- Ligne du tableau avec les données de l'article -->
                    <tr>
                        <td>
                            <?php echo ucwords($ReadArticle["NOM_ARTICLE"]);
                            ?>
                        </td>
                        <td>
                            <?php echo ucwords($ReadArticle["PRIX_ACHAT"]); ?>
                        </td>
                        <td>
                            <?php echo ucwords($ReadArticle["VOLUME"]); ?>
                        </td>
                        <td>
                            <?php echo ucwords($ReadArticle["TITRAGE"]); ?>
                        </td>
                        <td>
                            <?php echo ucwords($ReadArticle["ID_MARQUE"]); ?>
                        </td>
                        <td>
                            <?php echo ucwords($ReadArticle["ID_TYPE"]); ?>
                        </td>
                        <td>
                            <?php echo ucwords($ReadArticle["ID_COULEUR"]); ?>
                        </td>
                    </tr>

                <?php endforeach; ?>

                <!-- Ligne pour ajouter un nouvel article -->
                <tr>
                    <td>
                        <div class="form-group">
                            <label for="nom"></label>
                            <input type="text" class="form-control" id="nom" name="NOM_ARTICLE">
                        </div>
                    </td>

                    <td>
                        <div class="form-group">
                            <label for="nom"></label>
                            <input type="text" class="form-control" id="prix" name="PRIX_ACHAT">
                        </div>
                    </td>

                    <td>
                        <div class="form-group">
                            <label for="nom"></label>
                            <input type="text" class="form-control" id="volume" name="VOLUME">
                        </div>
                    </td>

                    <td>
                        <div class="form-group">
                            <label for="nom"></label>
                            <input type="text" class="form-control" id="titrage" name="TITRAGE">
                        </div>
                    </td>

                    <td>
                        <div class="form-group">
                            <label for="nom"></label>
                            <input type="text" class="form-control" id="marque" name="ID_MARQUE">
                        </div>
                    </td>

                    <td>
                        <div class="form-group">
                            <label for="nom"></label>
                            <input type="text" class="form-control" id="type" name="ID_TYPE">
                        </div>
                    </td>

                    <td>
                        <div class="form-group">
                            <label for="nom"></label>
                            <input type="text" class="form-control" id="couleur" name="ID_COULEUR">
                        </div>
                    </td>



                </tr>
            </tbody>
        </table>

        <!-- Boutons d'actions pour le formulaire -->
        <td>
            <button type="submit" name="Bouton_ajouter_Article" class="btn btn-primary">Ajouter</button>
            <button type="submit" name="Bouton_modifier_Article" class="btn btn-primary">Modifier</button>
            <button type="submit" name="Bouton_supprimer_Article" class="btn btn-primary">Supprimer</button>
        </td>
    </form>

    <!-- Pied de page fixé en bas de la page -->
    <footer class="fixed-bottom bg-dark text-white text-center py-2">
        <p>&copy; 2023 Ma Brasserie</p>
    </footer>


</body>

</html>