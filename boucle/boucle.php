<?php
// une boucle permet d'executer du code jusqu'à ce que la condition ne soit plus vraie

/********* boucle for *********/
// syntaxe:
// phase d'initialisation 
// la condition
// la phase d'incrémentation/décrémentation

// for(initialisation, condition, incrémentation)

// exemple

// for($i = 0; $i<=10; $i = $i +2){
//     // $i++ => $i = $i +1 // avec un pas de 1
//     // if($i == 6){
//         //     break; // le break permet de sortir de la boucle
//         // }
//         if($i == 6){
//             continue; // le continue permet de continuer de boucler sans executer ce qui est en bas
//             echo 'dfghjk';
//         }
//         echo "le nombre $i <br>";
// }

/********* boucle while *********/
// $i = 0;
// while ($i <= 10) {
//     $i++;
//     // if ($i == 6) {
//         //     break; // le break permet de sortir de la boucle
//         // }
//         if($i == 6){
//             continue; // le continue permet de continuer de boucler sans executer ce qui est en bas
//             //             echo 'dfghjk';
//         }
//         echo "le nombre $i <br>";
//         // $i = $i +1;
// }

// $autorisation = true;
// $nb = 0;
// while($autorisation == true){
//     $nb += 1;
//     if($nb == 5){
//         $autorisation = false;
//     }else{
//         echo "autorisation acceptée <br>";
//     }
// }
