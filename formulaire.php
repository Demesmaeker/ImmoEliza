<!DOCTYPE html>
<html>
    <head>
        <title>Formulaire IMMO</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="cours.css">
    </head>
    
    <body>
        <h1>Connaitre la valeur de votre bien immobilier</h1>
        <?php
            $maison = ['Batiment de service' => 1, 'Bungaloo' => 2 , 'Duplex' => 3, 'Maison' => 4, 'Maison de campagne' => 5, 'Maison de ville' => 6, 'Manoir' => 7, 'Mix' => 8, 'Propriété exceptionnelle' => 9, 'Triplex' => 10, 'Villa' => 11 ];

            $appartement = [ 'Appartement' => 1 , 'Kot' => 2 ,'Loft' => 3, 'Penthouse' => 4, 'Rez-de-Chaussée' => 5, 'Stuidio plein pied' => 6];

            $option = ['Surface habitable' => 1, 'Surface terrain (habitation comprise)' => 2, 'Etat du batiment' => 3, 'Nombre de chambres' => 4, 'Terrasse' => 5, 'Jardin' => 6, 'Nombres de facades' => 7 ];


/*afficher les cat ? 
if {($maison == $appartement)
    $appartement = hover;
} else if {($appartement == $maison)
    $maison = hover;
}

*/

    $Rmaison [''] = '';
    $Rappapartement [''] = '';
    $Roption [''] = '';
            
            foreach($maiosn as $appartement => $option){
                echo $Roption. ' a ' .$. ' ans<br>';
            }
        ?>
        <p>Voici une estimation du prix pour votre bien</p>
    </body>
</html>
