<html>
    <head>
        <script src='http://code.jquery.com/jquery-latest.min.js' type='text/javascript'></script>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css">

        <!-- Style Slider -->
        <link rel="stylesheet" href="css/themes/default/default.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="css/themes/light/light.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="css/themes/dark/dark.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="css/themes/bar/bar.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="css/style.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="css/style-perso.css" type="text/css" media="screen" />
    </head>
    <!-- Fin style slider -->

    <title>Page d'accueil</title>
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
                <li class="active"><a href="index.php">Accueil</a></li>
                <li><a href="formulaire.php">Formulaire</a></li>
                <li><a href="search.php">Rechercher</a></li>
                <li><a href="liste_recette.php">Liste des recettes</a></li>

            </ul>
        </div>
    </div>

    <!-- CONTENU --> 
    <div class="container theme-showcase" role="main">
        <div class="jumbotron" style="margin-top:20px;">
            <h1>TP XML/PHP <br/> Site recettes de cuisine</h1>       
            <div id="wrapper">
                <div class="slider-wrapper theme-default">
                    <p>Sur ce site, on partage nos recettes !</p>
                    <div id="slider" class="nivoSlider">
                <img src="images/plat1.jpg" data-thumb="images/plat1.jpg" alt="" />
                <img src="images/pizza1.jpg" data-thumb="images/pizza1.jpg" alt="" />
                <img src="images/tarte1.jpg" data-thumb="images/tarte1.jpg" alt="" />
                <img src="images/burger1.jpg" data-thumb="images/gateau.jpg" alt="" data-transition="slideInLeft" />
                <img src="images/gateau1.jpg" data-thumb="images/plat.jpg" alt="" title="#htmlcaption" />   
                    </div>
                </div>

            </div>


        </div>
    </div>
    
    <script type="text/javascript" src="js/jquery.nivo.slider.js"></script>
    <script type="text/javascript">
        $(window).load(function() {
            $('#slider').nivoSlider();
        });
    </script>

    <?php include("footer.php"); ?>
</body>
</html>

