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
        <a class="navbar-brand" href="../controller/index.php">Ma Brasserie</a>
        <!-- Bouton de bascule pour les écrans plus petits -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Contenu de la barre de navigation -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <!-- Liens vers différentes pages -->
                <li class="nav-item">
                    <a class="nav-link" href="index">Accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../controller/colorBlonde.php">Bière Blonde</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../controller/colorBrune.php">Bière Brune</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../controller/colorBlanche.php">Bière Blanche</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../controller/colorAmbree.php">Bière Ambrée</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../controller/Crudcolor.php">Crud couleur</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../controller/CrudArticle.php">Crud article</a>
                </li>
            </ul>
        </div>
    </nav>

    <main class="container position-absolute start-50 top-50 translate-middle w-50 h-50">
        <div class="page-404">
            <p class="p-3">Erreur 404</p>
            <span>La page est en construction ou n'existe plus !</span>
        </div>
    </main>

    <!-- Pied de page fixé en bas de la page -->
    <footer class="fixed-bottom bg-dark text-white text-center py-2">
        <p>&copy; 2023 Ma Brasserie</p>
    </footer>

</body>

</html>