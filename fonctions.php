<meta charset="utf-8">
<?php

function liste($fichier) {
    echo " <div class='table responsive'><center><h3>Liste des recettes :</h3><br/>
       
    <table class='table'>
    <thead>
    <tr>  
        <th></th> <th>Titre de la recette</th>
    </tr>
    </thead>
    <tbody>";
    $i = 1;
    foreach ($fichier->recipe as $element) {
        $titre = $element->title;
        echo "<tr><td>$i</td><td><a target='_blank' href='/TD4/recette.php?recette=$titre'>{$element->title}</a></td></tr>";
        $i++;
    }
    echo "</tbody></table></center> </div>";
}

function afficher_recette($fichier) {
//INGREDIENTS
    $j = 1;
    echo '<h2>Liste des ingrédients</h2>';
    foreach ($fichier->recipe as $recipe) {
        if (($_GET['recette']) == $recipe->title) { //On compare la variable reçue aux titres du xml
            foreach ($recipe->ingredient as $ingredient) {
                echo "<strong>$j." . $ingredient['name'] . '</strong>';
                echo ' : ' . $ingredient['amount'];
                echo ' ' . $ingredient['unit'] . "<br/>";
                $j++;
//SOUS INGREDIENTS
                $k = 1;
                foreach ($ingredient->ingredient as $sous_ingredient) {
                    echo 'sous-ingredient ' . $k . '. ' . $sous_ingredient['name'];
                    echo ' : ' . $sous_ingredient['amount'];
                    echo ' ' . $sous_ingredient['unit'] . "<br/>";
                    $k++;
                }
            }
        }
    }
//ETAPES DE PREPARATION
    $m = 1;
    echo '<br/> <h2>Etapes de préparation</h2>';
    foreach ($fichier->recipe as $recipe) {
        if (($_GET['recette']) == $recipe->title) { //On compare la variable reçue aux titres du xml
            foreach ($recipe->preparation->step as $step) {
                echo '<strong>' . $m . '.</strong>' . $step . '<br/>';
                $m++;
            }
        }
    }
//COMMENTAIRES
    echo '<br/> <h2>Commentaires</h2>';
    foreach ($fichier->recipe as $recipe) {
        if (($_GET['recette']) == $recipe->title) { //On compare la variable reçue aux titres du xml
            foreach ($recipe->comment as $comment) {
                echo $comment . '<br/>';
            }
        }
    }
//INFORMATIONS NUTRITIONELLES
    echo '<br/> <h2>Informations nutritionelles</h2>';
    foreach ($fichier->recipe as $recipe) {
        if (($_GET['recette']) == $recipe->title) { //On compare la variable reçue aux titres du xml
            foreach ($recipe->nutrition as $nutrition) {
                echo 'Calories : ' . $nutrition['calories'] . "<br/>";
                echo ' Fat : ' . $nutrition['fat'] . "<br/>";
                echo 'Carbohydrates : ' . $nutrition['carbohydrates'] . "<br/>";
                echo 'Protein : ' . $nutrition['protein'] . "<br/>";
                echo 'Alcool : ' . $nutrition['alcohol'] . "<br/>";
            }
        }
    }
}

function recherche() {
    $fichier = simplexml_load_file("recipes.xml");
    foreach ($fichier->recipe as $recipe) {
        foreach ($recipe->title as $titre) {
            $titre1 = strtolower($titre);
            $recherche1 = strtolower($_POST['recette']);
            if (strstr($titre1, $recherche1)) {
                echo '<h1><br>' . $titre1 . '</h1><br/>';
             $var = $titre1;   
 /* RESULTATS DE LA RECHERCHE*/            
             //INGREDIENTS
    $j = 1;
    echo '<h2>Liste des ingrédients</h2>';
    foreach ($fichier->recipe as $recipe) {
        if (($var) == strtolower($recipe->title)) { //On compare la variable reçue aux titres du xml
            foreach ($recipe->ingredient as $ingredient) {
                echo "<strong>$j." . $ingredient['name'] . '</strong>';
                echo ' : ' . $ingredient['amount'];
                echo ' ' . $ingredient['unit'] . "<br/>";
                $j++;
//SOUS INGREDIENTS
                $k = 1;
                foreach ($ingredient->ingredient as $sous_ingredient) {
                    echo 'sous-ingredient ' . $k . '. ' . $sous_ingredient['name'];
                    echo ' : ' . $sous_ingredient['amount'];
                    echo ' ' . $sous_ingredient['unit'] . "<br/>";
                    $k++;
                }
            }
        }
    }
//ETAPES DE PREPARATION
    $m = 1;
    echo '<br/> <h2>Etapes de préparation</h2>';
    foreach ($fichier->recipe as $recipe) {
        if (($var) == strtolower($recipe->title)) { //On compare la variable reçue aux titres du xml
            foreach ($recipe->preparation->step as $step) {
                echo '<strong>' . $m . '.</strong>' . $step . '<br/>';
                $m++;
            }
        }
    }
//COMMENTAIRES
    echo '<br/> <h2>Commentaires</h2>';
    foreach ($fichier->recipe as $recipe) {
        if (($var) == strtolower($recipe->title)) { //On compare la variable reçue aux titres du xml
            foreach ($recipe->comment as $comment) {
                echo $comment . '<br/>';
            }
        }
    }
//INFORMATIONS NUTRITIONELLES
    echo '<br/> <h2>Informations nutritionelles</h2>';
    foreach ($fichier->recipe as $recipe) {
        if (($var) == strtolower($recipe->title)) { //On compare la variable reçue aux titres du xml
            foreach ($recipe->nutrition as $nutrition) {
                echo 'Calories : ' . $nutrition['calories'] . "<br/>";
                echo ' Fat : ' . $nutrition['fat'] . "<br/>";
                echo 'Carbohydrates : ' . $nutrition['carbohydrates'] . "<br/>";
                echo 'Protein : ' . $nutrition['protein'] . "<br/>";
                echo 'Alcool : ' . $nutrition['alcohol'] . "<br/>";
            }
        }
    }
             
             
             
             
             
             
             
             
             
          
            }
        }
    }
}
?>




