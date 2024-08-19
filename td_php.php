<?php
// Étape 1: Déclaration des variables et des tableaux
// 1.	Créez un tableau associatif pour stocker des produits (quelconque) avec leur prix.
// 2.	Déclarez une variable $discount avec une valeur initiale de 10% (0.1).

$produits = ["pomme" => 12, 'mangue' => 20, "mandarine" => 15];
$discount = 0.1;

// 1.	Écrivez une fonction displayProducts qui prend le tableau des produits en paramètre et affiche chaque produit avec son prix.
// 2.	Appelez la fonction pour afficher la liste des produits.

function displayProducts(array $produits): void
{
    // echo "<pre>";
    // print_r($produits);
    // echo "</pre>";

    foreach ($produits as $cle => $value) {
        echo $cle . ' correspond à ' . $value . '<br>';
    }
}

displayProducts($produits);

// 1.	Écrivez une fonction applyDiscount qui prend le tableau des produits et un pourcentage de remise, et qui retourne un nouveau tableau avec les prix réduits.
// 2.	Appelez la fonction et stockez le résultat dans une nouvelle variable $discountedProducts.
// 3.	Affichez la liste des produits avec les nouveaux prix après remise en appelant displayProducts.

function applyDiscount(array $produits, float $discount)
{

    $produitsReduits = [];
    foreach ($produits as $cle => $value) {
        $valeurReduite = $value - ($value * 0.1); //=> $value * 10/100;
        // $produitsReduits += [$cle =>$valeurReduite];
        $produitsReduits[$cle] = $valeurReduite;
    }
    return $produitsReduits;
}

$discountedProducts = applyDiscount($produits, $discount);
echo "<pre>";
print_r($discountedProducts);
echo "</pre>";

echo "les produits après remise <br>";
displayProducts($discountedProducts);


// 1.	Écrivez une fonction findProduct qui prend le tableau des produits et un nom de produit, et qui retourne le prix du produit ou un message indiquant que le produit n'existe pas.
// 2.	Testez la fonction en recherchant un produit existant et un produit non existant.


// function findProduct(array $produits, string $nom)
// { 
//     if (array_key_exists($nom, $produits)){
//             return "le produit $nom coûte $produits[$nom] €";
//     }else{
//         return "$nom n'existe pas parmis les produits";
//     }

// }

// echo findProduct($produits, 'banane');

// 1.	Écrivez une fonction calculateTotal qui prend le tableau des produits et retourne le prix total de tous les produits.
// 2.	Appelez la fonction et affichez le prix total avant et après application de la remise.

function calculateTotal(array $produits): void
{
    $totalProduit = 0;
    foreach ($produits as $key => $value) {
        $totalProduit += $value; 
        // pour la premiere tour de boucle on additionne 0 + 12 et on met le resultat dans $totalProduit maintenant $totalProduit contient 12 (0+12) , la 2e tour de boucle on ajoute $totalProduit (12) + la nouvelle valeur de la 2e tour de boucle (20) et on stock le resultat (12 + 20) dans  $totalProduit  et ainsi de suite
    }
    echo "le prix total des produits est : $totalProduit <br><br>";
}
calculateTotal($produits);

echo "prix total avant la remise : <br>";
calculateTotal($produits);
echo "prix total après la remise : <br>";
calculateTotal($discountedProducts);