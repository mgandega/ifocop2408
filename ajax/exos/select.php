<?php 
$tab = [
    ['valeur'=>'animaux','selectedCategorie'=>[
        'tigre','lion','panthère'
    ]],
    ['valeur'=>'fruits','selectedCategorie'=>[
        'poire','pomme','banane'
    ]],
    ['valeur'=>'genre','selectedCategorie'=>[
        'homme','femme','mixte'
    ]],
];
if(isset($_GET['valeur'])){
    foreach($tab as $val){
        if($val['valeur'] == $_GET['valeur']){
            foreach($val['selectedCategorie'] as $cat){
                echo "<option value='$cat'>$cat</option>";
            } 
        }

    }
}
