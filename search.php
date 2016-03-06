<html>
    <head>
        <meta charset="utf-8"> 
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script src='http://code.jquery.com/jquery-latest.min.js' type='text/javascript'></script>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css">

        <link rel="stylesheet" href="css/style.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="css/style-perso.css" type="text/css" media="screen" />
        <title>Rechercher une recette</title>
    </head>
   
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
            <li class="active"><a href="search.php">Rechercher</a></li>
            <li><a href="liste_recette.php">Liste des recettes</a></li>

        </ul>
    </div><!--/.nav-collapse -->
</div>

<!-- CONTENU -->    
<body>
    <div class="container" style="min-height: 80%;">
        <div class="jumbotron">
            <h1>Rechercher une recette</h1>
            <p class="centre">Tapez le nom ou un mot du nom d'une recette, et cette recette s'affichera</p>
            <form action="search.php" method="post">
                <div class="input-group" style="margin-top:10px;  margin-left:auto; margin-right:auto;">
                    <input type="text" name="recette"/>
                    <input type="submit" class="btn-info" value="Rechercher"/>
                </div>
            </form>
            
            <?php if($_SERVER['REQUEST_METHOD']=="POST")
            {
                require_once 'fonctions.php';
                recherche();
            } ?>
        </div>    
    </div>
        <?php include("footer.php"); ?>
    <!--SCRIPTS -->     
    <script src='http://code.jquery.com/jquery-latest.min.js' type='text/javascript'></script>
    <script src="js/bootstrap.min.js"></script> 

       
</body>

</html> 