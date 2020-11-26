<!DOCTYPE html>
<html>
    <head>
        <title>Formulaire IMMO</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style.css">
    </head>
    
    <body>
        <h1>Connaitre la valeur de votre bien immobilier</h1>
        <?php
            $maison = ['Batiment de service' => 1, 'Bungaloo' => 2 , 'Duplex' => 3, 'Maison' => 4, 'Maison de campagne' => 5, 'Maison de ville' => 6, 'Manoir' => 7, 'Mix' => 8, 'Propriété exceptionnelle' => 9, 'Triplex' => 10, 'Villa' => 11 ];

            $appartement = [ 'Appartement' => 12 , 'Kot' => 13 ,'Loft' => 14, 'Penthouse' => 15, 'Rez-de-Chaussée' => 16, 'Studio plein pied' => 17];

            $option = ['Surface habitable' => 18, 'Surface terrain (habitation comprise)' => 19, 'Etat du batiment' => 20, 'Neuf' => 20.1, 'Bon' => 20.2, 'A rénover' => 20.2, 'A rafraishir' => 20.3, 'A restaurer' => 20.4, 'Vient d"être rénové' => 20.5, 'Nombre de chambres' => 21, 'Terrasse' => 22, 'Jardin' => 23, 'Nombres de facades' => 24 ];


/*afficher les cat ? 
if {($maison == $appartement)
    $appartement = hover;
} else if {($appartement == $maison)
    $maison = hover;
}

*/
$choix = [$ChoixA, $ChoixM, $ChoixO];

$maison [''] = '$ChoixM';
$appapartement [''] = '$ChoixA';
$option [''] = '$ChoixO';


            
            /*foreach($valeur as $Choix => $option){*/
                echo  'Vous avez selectionez une  ...avec ... est-ce correcte ? ';
            /*}*/
?>
        <p>Voici une estimation du prix pour votre bien</p>
    </body>
</html>
