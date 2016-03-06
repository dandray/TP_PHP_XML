<?php

//$root = simplexml_load_file("example.xml");
/*
 // 2. modification
$account = $root->addChild("account");
$account->addAttribute("login","geek");
$account->addchild("firstname","foo");
$account->addChild("lastname","BAR");
 
// 3. Synchronisation
$root->asXml("example.xml");
*/
    $produits = simplexml_load_file('produit.xml');  
    foreach ($produits->produit as $produit) {  
   // echo "IdProduit : $produit['id'] \n";
foreach($produit->titre as $titre){   
    echo "Titre : {$titre} \n";}  
    echo "Prix: {$produit->prix} \n";  
    }  

echo '<a href="produit2.xml" title="">Affiche Produit</a>';
?>