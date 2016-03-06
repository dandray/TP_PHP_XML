<html>
<head>
    <meta charset="utf-8"> 
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src='http://code.jquery.com/jquery-latest.min.js' type='text/javascript'></script>

    <script src='http://code.jquery.com/jquery-latest.min.js' type='text/javascript'></script>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css">

        
        <link rel="stylesheet" href="css/style.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="css/style-perso.css" type="text/css" media="screen" />
    <title>Ajouter une recette</title>
</head>

<body>

  <!--MENU -->

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
                <li class="active"><a href="formulaire.php">Formulaire</a></li>
                <li><a href="search.php">Rechercher</a></li>
                <li><a href="liste_recette.php">Liste des recettes</a></li>

            </ul>
        </div>
    </div>

<!-- CONTENU -->    

<div class="container theme-showcase" role="main">
    <h1>Ajouter une recette</h1>

    <form action="formulaire.php" method="POST" role="form" class="form-horizontal">     
        <div id="titres">

            <div class="input-group">
                <label class="control-label">Nom de la recette</label>
                <input   id="title" name="title" type="text" class="form-control" required/>	
            </div>


            <div class="input-group">
                <label class="control-label col-sm-3" for="inputSuccess3">Description</label>
                <input   id="description" name="description" type="text" class="form-control" required/>
            </div>
        </div>


        <div class="col-6 col-sm-6 col-lg-4">
            <h4>
                Ingrédients 
            </h4>
            <div class="input-group">
                <label  for="ingredient1">Ingredient 1 :</label>
                <input   id="ingredient1" name="ingredient1" type="text" class="form-control" required>
            </div>
            <br/>

            <div class="input-group">
                <label  for="amount1">Nombre d'unités :</label>
                <input   id="amount1" name="amount1" type="text"class="form-control" required/>
            </div>

            <br/>
            <div class="input-group">
                <label  for="unit1">Unités :</label>
                <input   id="unit1" name="unit1" type="text" class="form-control" required/>
            </div>

            <br/>
            <div class="input-group">
                <label  for="ingredient2">Ingredient 2 :</label>
                <input   id="ingredient2" name="ingredient2" type="text" class="form-control" required/>
            </div>

            <br/>
            <div class="input-group">
                <label  for="amount2">Nombre d'unités :</label>
                <input   id="amount2" name="amount2" type="text" class="form-control" required/>
            </div>
            <br/>

            <div class="input-group">
                <label  for="unit2">Unités :</label>
                <input   id="unit2" name="unit2" type="text" class="form-control" required/>
            </div>
            <br/>
            <!--bouton pour ajouter un ingrédient--> 
            <div class="input-group">
                <input type="button" id="btn" value="ajouter un ingrédient" class="btn btn-primary btn-sm" >
            </div>
            <div id="ingredient_sup"></div>

            <br/><br/>
        </div>

        <div class="col-6 col-sm-6 col-lg-4">
           <h4>
            Etapes de préparation 
        </h4>
        <div class="input-group">
            <label  for="etape1">Etape 1 :</label>
            <textarea class="form-control" rows="3"  id="etape1" name="etape1" required></textarea>
        </div>

        <div class="input-group">
            <label  for="etape2">Etape 2 :</label>
            <textarea   class="form-control" rows="3" id="etape2" name="etape2" required></textarea>
        </div>

        <div class="input-group">
            <label  for="etape3">Etape 3 :</label>
            <textarea   class="form-control" rows="3" id="etape3" name="etape3" required></textarea>
        </div>
        <br/>
        <!--bouton pour ajouter une étape--> 
        <div id="etape_sup"></div>
        <br/>
        <div class="input-group">
            <input type="button" id="btn2" value="ajouter une étape" class="btn btn-primary btn-sm" >
        </div>
        <br/>


        <div class="input-group">
            <label  for="comment">Commentaires</label>
            <textarea   class="form-control" rows="4" id="comment" name="comment"></textarea>
        </div>
    </div>
    
    <div class="col-6 col-sm-6 col-lg-4">
        <h4>
            Informations Nutrition 
        </h4>

        <div class="input-group">
            <label  for="calories">Calories :</label>
            <input   id="calories" name="calories" class="form-control"/>
        </div>
        <br/>

        <div class="input-group">
            <label  for="fat">Graisses :</label>
            <input   id="fat" name="fat" class="form-control"/>
        </div>
        <br/>

        <div class="input-group">
            <label  for="carbohydrates">Carbohydrates :</label>
            <input   id="carbohydrates" name="carbohydrates" class="form-control"/>
        </div>

        <br/>
        <div class="input-group">
            <label  for="protein">Proteines :</label>
            <input   id="protein" name="protein" class="form-control"/>
        </div>

        <br/>
        <div class="input-group">
            <label  for="alcohol">Alcool :</label>
            <input   id="alcohol" name="alcohol" class="form-control"/>
        </div> 
        <br/>
        <input type="submit" id="submit" name="submit" class="btn btn-success" value="Envoyer votre recette"/>
    </div> 
</form>
</div>

<?php
if($_SERVER['REQUEST_METHOD']=="POST")
{
    $root = simplexml_load_file("recipes.xml");

        // 2. modification
    $collection = $root->addChild("description", $_POST['description']);
    $collection = $root->addChild("recipe");
    $collection->addchild("title", $_POST['title']);
    $ing = $collection->addchild("ingredient");

    foreach ($_POST as $cle => $valeur) {
        if (strstr($cle, "ingredient")) {
            $ing = $collection->addchild("ingredient");
        }
        if (strstr($cle, "ingredient")) {
            $ing->addAttribute("name", $valeur);
        }   
        if (strstr($cle, "amount")) {
            $ing->addAttribute("amount", $valeur);
        }   
        if (strstr($cle, "unit")) {
            $ing->addAttribute("unit", $valeur);
        }      
    }

    $preparation = $collection->addChild("preparation");
    foreach ($_POST as $cle => $valeur) {
        if (strstr($cle, "etape")) {
            $preparation->addchild("step", $valeur);
        }
    }
    $collection->addchild("comment", $_POST['comment']);
    $nut = $collection->addchild("nutrition");
    $nut->addAttribute("calories", $_POST['calories']);
    $nut->addAttribute("fat", $_POST['fat']);
    $nut->addAttribute("carbohydrates", $_POST['carbohydrates']);
    $nut->addAttribute("protein", $_POST['protein']);

// 3. Synchronisation
    $root->asXml("recipes.xml");
    echo 'Recette ajoutée';
} 
?>

<?php include("footer.php"); ?>

</body>
<script>
var j=3;
$(document).ready(function(){
   $("#btn").click(function(){
    $("#ingredient_sup").append("<div class='input-group'> <label  for='ingredient"+j+"'>Ingredient"+j+" :</label><input   id='ingredient"+j+"' name='ingredient"+j+"' type='text' class='form-control'></div><br/><div class='input-group'><label  for='amount"+j+"'>Nombre d'unités :</label><input   id='amount"+j+"' name='amount"+j+"' type='text'class='form-control'/></div><br/><div class='input-group'><label  for='unit"+j+"'>Unités :</label><input   id='unit"+j+"' name='unit"+j+"' type='text' class='form-control'/> <br/></div> ");
    j++;
});
   var i=4;
   $("#btn2").click(function(){
    $("#etape_sup").append("<div class='input-group'> \
        <label  for='etape"+i+"'>Etape "+i+":</label>\
        <textarea   class='form-control' rows='3' id='etape"+i+"' name='etape"+i+"'></textarea> \
        </div> \
        <br/> ");                 
    i++;                 
});

});
</script>  

<style>
h4{
    font-weight:bold;

    margin-top:40px;
}
#titres{
    width: 300px;
    margin: auto;
}
</style>
</html>



