<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Configuration de la page -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <title>Ma Barre de Menu</title>
  <?php require_once "../controller/colorBrune.php"; ?>
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
      /* le background de la page  */
    }
  </style>

  <!-- Conteneur principal avec les informations sur la bière brune -->
  <div class="container">
    <h1>Biere brune</h1>
    <div class="row">
      <!-- Colonne pour l'image de la bière brune -->
      <div class="col-md-4">
        <img src="../images/biere-brune.jpg" alt="Biere brune" class="img-fluid">
      </div>

      <!-- Colonne pour la description de la bière brune -->
      <div class="col-md-8">
        <h2>Description</h2>
        <p>
          La bière brune est une bière de couleur brune, du brun acajou au noir ébène,
          obtenue grâce à l'utilisation de malt plus ou moins torréfié et/ou de colorant
          (généralement une variété de E150) ou de bière colorante (un brassin non destiné
          à la consommation directe, brassé avec des malts extrêmement colorés, mélangé
          avec la bière à colorer) pour les pays interdisant l'utilisation de colorants.
        </p>
        <p>
          Elles se caractérisent par une mousse riche et crémeuse, et une grande onctuosité en bouche.
          lourde acidulées, elles sont généralement amères en finale.
        </p>
      </div>
    </div>
  </div>

  <!-- Titre et tableau pour afficher les bières brunes -->
  <br>
  <h3 class="display-4 text-left text-dark font-weight-bold">Mes biéres brunes</h3>
  <br>

  <table class="table table-bordered">




    <thead>


      <tr>
        <!-- En-têtes du tableau -->
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
      <!-- Boucle PHP pour afficher les bières brunes -->
      <?php
      foreach ($colorBrunes as $article) {
      ?>

        <tr>
          <!-- Ligne du tableau avec les données de la bière brune -->
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



  <!-- Scripts Bootstrap -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html>