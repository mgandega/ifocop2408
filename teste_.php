 <?php
    // 1. Manipuler des variables et des tableaux.
    // 2. Utiliser des conditions pour effectuer des vérifications.
    // 3. Définir et appeler des fonctions.
    // 4. Afficher des informations dynamiques.

    // 1. Créez un tableau associatif pour stocker des produits (quelconque) avec leur prix.
    // 2. Déclarez une variable $discount avec une valeur initiale de 10% (0.1).

    // $produits = ["mangue" => 200, "pomme" => 120, "banane" => 300];
    // $discount  = 10 / 100;

    // 1. Écrivez une fonction displayProducts qui prend le tableau des produits en
    // paramètre et affiche chaque produit avec son prix.
    // 2. Appelez la fonction pour afficher la liste des produits.

    // function displayProducts(array $produits)
    // {
    //     echo "<h3>les prix sans réduction :</h3>";
    //     foreach ($produits as $key => $value) {
    //         echo $key . " coûte " . $value . "<br>";
    //     }
    // }
    // displayProducts($produits);

    // // 1. Écrivez une fonction applyDiscount qui prend le tableau des produits et un
    // // pourcentage de remise, et qui retourne un nouveau tableau avec les prix réduits.
    // // 2. Appelez la fonction et stockez le résultat dans une nouvelle
    // // variable $discountedProducts.
    // // 3. Affichez la liste des produits avec les nouveaux prix après remise en
    // // appelant displayProducts.
    // echo "<hr />";

    // function applyDiscount($produits, $discount)
    // {
    //     $newProducts = [];
    //     echo "<h3>les prix avec réduction :</h3>";
    //     foreach ($produits as $key => $value) {
    //         $value = $value - ($value * 0.1);
    //         $newProducts[$key] = $value;
    //     }
    //     return $newProducts;
    // }

    // $discountedProducts = applyDiscount($produits, $discount);

    // function displayproduct($discountedProducts)
    // {
    //     foreach ($discountedProducts as $key => $value) {
    //         echo $key . " coûte " . $value . "<br>";
    //     }
    // }
    // displayproduct($discountedProducts);


    // function findProduct($produits, $nom)
    // {
    //     if (array_key_exists($nom, $produits)) {
    //         echo "le produit $nom coûte $produits[$nom] <br>";
    //     } else {
    //         echo "le produit n'existe pas <br>";
    //     }
    // }
    // findProduct($produits, 'mangue');

    // function calculateTotal($produits)
    // {
    //     echo "prix total avant l'application de la remise : ";
    //     $prixAvantRemise = 0;
    //     foreach ($produits as $produit) {
    //         $prixAvantRemise += $produit;
    //     }
    //     echo $prixAvantRemise . "<br>";
    //     echo "prix total après l'application de la remise : ";
    //     $prixApresRemise = 0;
    //     foreach ($produits as $produit) {
    //         $produit = $produit - $produit * 0.1;
    //         $prixApresRemise += $produit;
    //     }
    //     echo $prixApresRemise . "<br>";
    // }
    // calculateTotal($produits);


    // Etape 1
    $produits = ["shirt" => 30, "jeans" => 50, "basket" => 70];

    $discount = 0.9;

    // Etape 2

    function displayProducts($produits)
    {
        foreach ($produits as $product => $value) {
            echo "Les $product coutent $value euros.<br>";
        }
    }

    displayProducts($produits);

    // Etape 3

    function applyDiscount($produits, $discount)
    {
        $newProducts = [];
        foreach ($produits as $product => $value) {
            $value = $value * $discount;
            $newProducts += [$product => $value];
            // $newProducts[$product] = $value;
        }
        return $newProducts;
    }

    $discountProducts = applyDiscount($produits, $discount);

    echo "<pre>";
    print_r($discountProducts);
    echo "</pre>";

    displayProducts($discountProducts);

    setCookie("nomCookie", "contenuCookie...", time() + 31536000);
