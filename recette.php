<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css">
        <link href="navbar-static-top.css" rel="stylesheet">
        <title>Liste des recettes</title> 
    </head>
    <body>

        <!--MENU -->

        <div class="navbar navbar-default navbar-static-top" role="navigation" style="background: steelblue;">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php">Site de recettes</a>
                </div>           
                <ul class="nav navbar-nav">
                    <li><a href="index.php">Accueil</a></li>
                    <li><a href="formulaire.php">Formulaire</a></li>
                    <li><a href="search.php">Rechercher</a></li>
                    <li class="active"><a href="liste_recette.php">Liste des recettes</a></li>

                </ul>
            </div><!--/.nav-collapse -->
        </div>

        <!--CONTENU -->     
        <div class="container">
            <div class="jumbotron">
<?php
                require_once 'fonctions.php';
                $fichier = simplexml_load_file('recipes.xml');

                if (isset($_GET['recette'])) {
                    echo '<h1><center>'.$_GET['recette'].'</h1></center><br/>';
                }
                
                afficher_recette($fichier);
?>
</div>
        </div>

        <!--SCRIPTS -->     
        <script src='http://code.jquery.com/jquery-latest.min.js' type='text/javascript'></script>
        <script src="js/bootstrap.min.js"></script>        
    </body>
</html>

