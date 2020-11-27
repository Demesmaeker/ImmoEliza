<?php

    namespace ImmoEliza;

        if(isset($_POST['ZIP'], $_POST['type_of_property'],$_POST['subtype_of_property'], $_POST['house_area'], $_POST['surface_of_the_land'])){
        if(!empty($_POST['ZIP']) && !empty($_POST['type_of_property']) && !empty($_POST['subtype_of_property']) && !empty($_POST['house_area']) && !empty($_POST['surface_of_the_land'])){
                $ZIP = $_POST['ZIP'];
                $type_of_property = $_POST['type_of_property'];
                $subtype_of_property = $_POST['subtype_of_property'];
                $house_area = $_POST['house_area'];
                $surface_of_the_land = $_POST['surface_of_the_land'];

                // ---> SANITIZATION <---
                forEach($_POST as $key => $value){
                    $value = filter_var($value, FILTER_SANITIZE_STRING);
                    $value = filter_var($value, FILTER_SANITIZE_ADD_SLASHES);
                }

                try{
                    $address = new Address($house_area,$ZIP);
                    $property = new Property($type_of_property,$subtype_of_property,$surface_of_the_land);
                    $req = new Request($address,$property);
                }catch(Exception $err){
                    echo 'Erreur: '.$err;
                }
                

                $tmp = $req->getPrediction();
                echo '<p class="col-12 text-center" id="priceEstimate" style="background-color: red; font-size: 24px;">Estimation du prix '.$tmp['price_of_the_estate'].'€</p>';

                if(true /* temporaire */){echo '<script type="module" src="./assets/js/objLoad.js"></script>';}
            }
        }


?>