<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- DATA TOGGLE -->
    <!-- WE NEED YOU, AND WE NEED IT HERE, NOT ANYWHERE ELSE -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- UNTIL HERE -->



    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>


    <!-- DATA TOGGLE  -->
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>

    <!-- Custom styles -->
    <link rel="stylesheet" href="./css/style.css">
    
    <title>ImmoEliza</title>
    
</head>
<body>
    <img src="./assets/IMG/bgimmo.jpg" style="position:fixed; height: 100%; background-repeat:repeat-x; opacity: 0.5;">
    <!-- ***** HEADER START ***** -->

    <!--<header class="container-fluid" id="header">-->

  
    <header>
        <nav class="navbar navbar-expand-lg navbar-light" style="background-color:#084c61; margin-bottom:1em;" >
            <div id="enteteimage" ><img class="enteteimage" src="assets/IMG/logoimmoeliza.png" height="300" width="auto" style=" position:relative; margin-top:2em;">
            </div>
             
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon">
                  
              </span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
              <div class="navbar-nav" style="margin-left:2em; margin-right:2em;">
                <a class="nav-link active" style="color: #ffff;" href="#">A VENDRE <span class="sr-only">(current)</span></a>
                <a class="nav-link" style="color: #ffff; margin-left:2em; margin-right:2em;" href="#">A LOUER</a>
                <a class="nav-link" style="color: #ffff; margin-left:2em; margin-right:2em;" href="#">ESTMIER</a>
                <a class="nav-link" style="color: #ffff; margin-left:2em; margin-right:2em;" href="#">AGENCES</a>
                <a class="nav-link" style="color: #ffff; margin-left:2em; margin-right:2em;" href="#">SERVICES</a>
              </div>
            </div>
            <button class="btn btn-outline-success" type="button" style="color: red; background-color: white;">SE CONNECTER</button>
                <button class="btn btn-sm btn-outline-secondary" type="button">FR</button>
                <button class="btn btn-sm btn-outline-secondary" type="button">NL</button>
        </nav>
    </header>
            <!-- THE NAV BAR -->

<div class="container-fluid">
    <div class="row justify-content-right">
                <div class="col-9 ">
                    <div class="container bg-danger" style="background-image:url(./assets/IMG/cadremur.png);background-repeat: repeat-y;background-size:83em;background-position:36% 0%;">
                        <!-- premiere rangée de fenetre maison -->
                        <div class="container">
                            <div class="row" id="button-maison">
                                <div classe="col-12">
                                    <div class="checkbox" >
                                        <label>
                                            <input type="checkbox" checked data-toggle="toggle" data-width="100" data-height="50"  data-off="Maison" data-on="<i class='fas fa-home'></i> Maison" data-onstyle="info" data-offstyle="success" style="height:10em;">
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <img src="./assets/IMG/murG.png" class="murG1" style="position:fixed; left:5em; top:1em; height:36%">
                        <img src="./assets/IMG/murD.png" class="murD1" style="position:fixed; left:71.5em; top:1em; height:36%"> -->
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-1 m-3">
                                        <label>
                                            <input type="checkbox" checked data-toggle="toggle" data-width="100" data-height="150" data-on="<i class='far fa-hand-pointer'></i>" data-off="<i class='fas fa-check-circle'></i>"  data-onstyle="dark" data-offstyle="warning">
                                        </label>
                                    <div class="btn btn-primary justify-content-start" class="keep" style="width:6.1rem;">
                                        Service
                                    </div>
                                </div>
                                <div class="col-1 m-3">
                                        <label>
                                            <input type="checkbox" checked data-toggle="toggle" data-width="100" data-on="<i class='far fa-hand-pointer'></i>" data-height="150" data-off="<i class='fas fa-check-circle'></i>"  data-onstyle="dark" data-offstyle="warning">
                                        </label>
                                    <button class="btn btn-primary" class="keep" style="width:6.1rem;">
                                        Bungaloo
                                    </button>
                                </div>
                                <div class="col-1 m-3">
                                        <label>
                                            <input type="checkbox" checked data-toggle="toggle" data-width="100" data-on="<i class='far fa-hand-pointer'></i>" data-height="150" data-off="<i class='fas fa-check-circle'></i>"  data-onstyle="dark" data-offstyle="warning">
                                        </label>
                                    <button class="btn btn-primary" class="keep" style="width:6.1rem;">
                                        Duplex
                                    </button>
                                </div>
                                <div class="col-1 m-3">
                                        <label>
                                            <input type="checkbox" checked data-toggle="toggle" data-width="100" data-on="<i class='far fa-hand-pointer'></i>" data-height="150" data-off="<i class='fas fa-check-circle'></i>"  data-onstyle="dark" data-offstyle="warning">
                                        </label>
                                    <button class="btn btn-primary" class="keep" style="width:6.1rem;">
                                        Maison
                                    </button>
                                    </div>
                                <div class="col-1 m-3">
                                        <label>
                                            <input type="checkbox" checked data-toggle="toggle" data-width="100" data-on="<i class='far fa-hand-pointer'></i>" data-height="150" data-off="<i class='fas fa-check-circle'></i>"  data-onstyle="dark" data-offstyle="warning">
                                        </label>
                                    <button class="btn btn-primary" class="keep" style="width:6.1rem;">
                                        Campagne
                                    </button>
                                </div>
                                <div class="col-1 m-3">
                                    <label>
                                        <input type="checkbox" checked data-toggle="toggle" data-width="100" data-on="<i class='far fa-hand-pointer'></i>" data-height="150" data-off="<i class='fas fa-check-circle'></i>"  data-onstyle="dark" data-offstyle="warning">
                                    </label>
                                    <button class="btn btn-primary" class="keep" style="width:6.1rem;">
                                        Ville
                                    </button>
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-1 m-3">
                                    <label>
                                        <input type="checkbox" checked data-toggle="toggle" data-width="100" data-on="<i class='far fa-hand-pointer'></i>" data-height="150" data-off="<i class='fas fa-check-circle'></i>"  data-onstyle="dark" data-offstyle="warning">
                                    </label>
                                    <button class="btn btn-primary" class="keep" style="width:6.1rem;">
                                        Manoir
                                    </button>
                                </div>
                                <div class="col-1 m-3">

                                    <label>
                                        <input type="checkbox" checked data-toggle="toggle" data-width="100" data-on="<i class='far fa-hand-pointer'></i>" data-height="150" data-off="<i class='fas fa-check-circle'></i>"  data-onstyle="dark" data-offstyle="warning">
                                    </label>
                                    <button class="btn btn-primary" class="keep" style="width:6.1rem;">
                                        Mix
                                    </button>
                                </div>
                                <div class="col-1 m-3">

                                    <label>
                                        <input type="checkbox" checked data-toggle="toggle" data-width="100"  data-on="<i class='far fa-hand-pointer'></i>" data-height="150" data-off="<i class='fas fa-check-circle'></i>"  data-onstyle="dark" data-offstyle="warning">
                                    </label>

                                    <button class="btn btn-primary" class="keep" style="width:6.1rem;">
                                        Exceptionnel
                                    </button>
                                </div>
                                <div class="col-1 m-3">
                                    <label>
                                        <input type="checkbox" checked data-toggle="toggle" data-width="100"  data-on="<i class='far fa-hand-pointer'></i>" data-height="150" data-off="<i class='fas fa-check-circle'></i>"  data-onstyle="dark" data-offstyle="warning">
                                    </label>
                                    <button class="btn btn-primary" class="keep" style="width:6.1rem;">
                                        Triplex
                                    </button>
                                </div>
                                <div class="col-1 m-3">
                                    <label>
                                        <input type="checkbox" checked data-toggle="toggle" data-width="100"  data-on="<i class='far fa-hand-pointer'></i>" data-height="150" data-off="<i class='fas fa-check-circle'></i>"  data-onstyle="dark" data-offstyle="warning">
                                    </label>
                                    <button class="btn btn-primary" class="keep" style="width:6.1rem;">
                                        Villa
                                    </button>
                                </div>
                                <div class="col-1 m-3">
                                    <label>
                                        <input type="checkbox" checked data-toggle="toggle" data-width="100"  data-on="" data-height="150" data-off="<i class='fas fa-check-circle'></i>"  data-onstyle="dark" data-offstyle="warning">
                                    </label>
                                    <button class="btn btn-primary" class="keep" style="width:6.1rem;">
                                        A Louer
                                    </button>
                                </div>
                            </div>
                        </div>
                        <!-- deuxieme rangée de fenetre appartement -->
                        <div class="container">
                            <div class="row" id="button-maison">
                                <div classe="col-12">
                                    <div class="checkbox" >
                                        <label >
                                            <input type="checkbox" checked data-toggle="toggle" data-width="100" data-height="50"  data-off="<i class='fas fa-check-circle'></i>" data-on="<i class='fas fa-building'></i> Appartement" data-onstyle="info" data-offstyle="success">
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <img src="./assets/IMG/murG.png" class="murG2" style="position:relative; left:5em; top:36%; height:36%">
                        <img src="./assets/IMG/murD.png" class="murD2" style="position:relative; left:71.5em; top:36%; height:36%"> -->
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-1 m-3">
                                        <label>
                                            <input type="checkbox" checked data-toggle="toggle" data-width="100" data-height="150" data-on="<i class='far fa-hand-pointer'></i>" data-off="<i class='fas fa-check-circle'></i>"  data-onstyle="dark" data-offstyle="warning">
                                        </label>
                                    <div class="btn btn-primary justify-content-start" class="keep" style="width:6.1rem;">
                                    Appartement
                                    </div>
                                </div>
                                <div class="col-1 m-3">
                                        <label>
                                            <input type="checkbox" checked data-toggle="toggle" data-width="100" data-on="<i class='far fa-hand-pointer'></i>" data-height="150" data-off="<i class='fas fa-check-circle'></i>"  data-onstyle="dark" data-offstyle="warning">
                                        </label>
                                    <button class="btn btn-primary" class="keep" style="width:6.1rem;">
                                        KOT
                                    </button>
                                </div>
                                <div class="col-1 m-3">
                                        <label>
                                            <input type="checkbox" checked data-toggle="toggle" data-width="100" data-on="<i class='far fa-hand-pointer'></i>" data-height="150" data-off="<i class='fas fa-check-circle'></i>"  data-onstyle="dark" data-offstyle="warning">
                                        </label>
                                    <button class="btn btn-primary" class="keep" style="width:6.1rem;">
                                        Loft
                                    </button>
                                </div>
                                <div class="col-1 m-3">
                                        <label>
                                            <input type="checkbox" checked data-toggle="toggle" data-width="100" data-on="<i class='far fa-hand-pointer'></i>" data-height="150" data-off="<i class='fas fa-check-circle'></i>"  data-onstyle="dark" data-offstyle="warning">
                                        </label>
                                    <button class="btn btn-primary" class="keep" style="width:6.1rem;">
                                        Penthouse
                                    </button>
                                    </div>
                                <div class="col-1 m-3">
                                        <label>
                                            <input type="checkbox" checked data-toggle="toggle" data-width="100" data-on="<i class='far fa-hand-pointer'></i>" data-height="150" data-off="<i class='fas fa-check-circle'></i>"  data-onstyle="dark" data-offstyle="warning">
                                        </label>
                                    <button class="btn btn-primary" class="keep" style="width:6.1rem;">
                                        R-d-C
                                    </button>
                                </div>
                                <div class="col-1 m-3">
                                    <label>
                                        <input type="checkbox" checked data-toggle="toggle" data-width="100" data-on="<i class='far fa-hand-pointer'></i>" data-height="150" data-off="<i class='fas fa-check-circle'></i>"  data-onstyle="dark" data-offstyle="warning">
                                    </label>
                                    <button class="btn btn-primary" class="keep" style="width:6.1rem;">
                                        Studio PP
                                    </button>
                                </div>
                            </div>
                        </div>
                        <!-- infos suplémentaires -->
                        <div class="container">
                            <div class="row" id="button-maison">
                                <div classe="col-12">
                                    <div class="checkbox" >
                                        <label >
                                            <input type="checkbox" checked data-toggle="toggle" data-width="100" data-height="50"  data-off="Option" data-on="<i class='fas fa-filter'></i>Optional" data-onstyle="info" data-offstyle="success">
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <img src="./assets/IMG/murG.png" class="murG3" style="position:sticky; left:25px; top:70%; height:36%">
                        <img src="./assets/IMG/murD.png" class="murD3" style="position:absolute; left:900px; top:70%; height:36%"> -->
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-1 m-3">
                                        <label>
                                            <input type="checkbox" checked data-toggle="toggle" data-width="100" data-height="150" data-on="<i class='far fa-hand-pointer'></i>" data-off="<i class='fas fa-check-circle'></i>"  data-onstyle="dark" data-offstyle="warning">
                                        </label>
                                    <div class="btn btn-primary justify-content-start" class="keep" style="width:6.1rem;">
                                    S habitable
                                    </div>
                                </div>
                                <div class="col-1 m-3">
                                        <label>
                                            <input type="checkbox" checked data-toggle="toggle" data-width="100" data-on="<i class='far fa-hand-pointer'></i>" data-height="150" data-off="<i class='fas fa-check-circle'></i>"  data-onstyle="dark" data-offstyle="warning">
                                        </label>
                                    <button class="btn btn-primary" class="keep" style="width:6.1rem;">
                                    M²
                                    </button>
                                </div>
                                <div class="col-1 m-3">
                                        <label>
                                            <input type="checkbox" checked data-toggle="toggle" data-width="100" data-on="<i class='far fa-hand-pointer'></i>" data-height="150" data-off="<i class='fas fa-check-circle'></i>"  data-onstyle="dark" data-offstyle="warning">
                                        </label>
                                    <button class="btn btn-primary" class="keep" style="width:6.1rem;">
                                    S terrain<br>(habitation comprise)
                                    </button>
                                </div>
                                <div class="col-1 m-3">
                                        <label>
                                            <input type="checkbox" checked data-toggle="toggle" data-width="100" data-on="<i class='far fa-hand-pointer'></i>" data-height="150" data-off="<i class='fas fa-check-circle'></i>"  data-onstyle="dark" data-offstyle="warning">
                                        </label>
                                    <button class="btn btn-primary" class="keep" style="width:6.1rem;">
                                    M²
                                    </button>
                                    </div>
                                <div class="col-1 m-3">
                                        <label>
                                            <input type="checkbox" checked data-toggle="toggle" data-width="100" data-on="<i class='far fa-hand-pointer'></i>" data-height="150" data-off="<i class='fas fa-check-circle'></i>"  data-onstyle="dark" data-offstyle="warning">
                                        </label>
                                    <button class="btn btn-primary" class="keep" style="width:6.1rem;">
                                    Etat du batiment
                                    </button>
                                </div>
                                <div class="col-1 m-3">
                                    <label>
                                        <input type="checkbox" checked data-toggle="toggle" data-width="100" data-on="<i class='far fa-hand-pointer'></i>" data-height="150" data-off="<i class='fas fa-check-circle'></i>"  data-onstyle="dark" data-offstyle="warning">
                                    </label>
                                    <button class="btn btn-primary" class="keep" style="width:6.1rem;">
                                    Menu D
                                    </button>
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-1 m-3">
                                    <label>
                                        <input type="checkbox" checked data-toggle="toggle" data-width="100" data-on="<i class='far fa-hand-pointer'></i>" data-height="150" data-off="<i class='fas fa-check-circle'></i>"  data-onstyle="dark" data-offstyle="warning">
                                    </label>
                                    <button class="btn btn-primary" class="keep" style="width:6.1rem;">
                                    Nombre de chambres
                                    </button>
                                </div>
                                <div class="col-1 m-3">

                                    <label>
                                        <input type="checkbox" checked data-toggle="toggle" data-width="100" data-on="<i class='far fa-hand-pointer'></i>" data-height="150" data-off="<i class='fas fa-check-circle'></i>"  data-onstyle="dark" data-offstyle="warning">
                                    </label>
                                    <button class="btn btn-primary" class="keep" style="width:6.1rem;">
                                    Réponse
                                    </button>
                                </div>
                                <div class="col-1 m-3">

                                    <label>
                                        <input type="checkbox" checked data-toggle="toggle" data-width="100"  data-on="<i class='far fa-hand-pointer'></i>" data-height="150" data-off="<i class='fas fa-check-circle'></i>"  data-onstyle="dark" data-offstyle="warning">
                                    </label>

                                    <button class="btn btn-primary" class="keep" style="width:6.1rem;">
                                    Terrasse
                                    </button>
                                </div>
                                <div class="col-1 m-3">
                                    <label>
                                        <input type="checkbox" checked data-toggle="toggle" data-width="100"  data-on="<i class='far fa-hand-pointer'></i>" data-height="150" data-off="<i class='fas fa-check-circle'></i>"  data-onstyle="dark" data-offstyle="warning">
                                    </label>
                                    <button class="btn btn-primary" class="keep" style="width:6.1rem;">
                                    M²
                                    </button>
                                </div>
                                <div class="col-1 m-3">
                                    <label>
                                        <input type="checkbox" checked data-toggle="toggle" data-width="100" data-on="<i class='far fa-hand-pointer'></i>" data-height="150" data-off="<i class='fas fa-check-circle'></i>"  data-onstyle="dark" data-offstyle="warning">
                                    </label>
                                    <button class="btn btn-primary" class="keep" style="width:6.1rem;">
                                    Nombre de facades
                                    </button>
                                </div>
                                <div class="col-1 m-3">
                                    <label>
                                        <input type="checkbox" checked data-toggle="toggle" data-width="100"  data-on="" data-height="150" data-off="<i class='fas fa-check-circle'></i>"  data-onstyle="dark" data-offstyle="warning">
                                    </label>
                                    <button class="btn btn-primary" class="keep" style="width:6.1rem;">
                                    Réponse
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <form action="" method="post" class="form p-5" id="form_estimate">
                        <div class="form-row">
                            <div class="form-group">
                                <label for="ZIP">Code postal</label>
                                <input type="number" class="form-control" id="ZIP" name="ZIP" placeholder="3306">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="type_of_property">Type de logement</label>
                                <select id="type_of_property" class="form-control" name="type_of_property">
                                    <option id="house" value="house" selected>Maison</option>
                                    <option id="apart" value="apart" checked="checked">
                                        Appartement</option>
                                </select>
                            </div>

                            <!-- *** SUBTYPE OF PROPERTY *** -->

                            <div class="form-group">
                                <label for="subtype_of_property">Type d'habitation</label>
                                <select id="subtype_of_property" name="subtype_of_property" class="form-control">
                                    <option selected value="to be done up"> To be done up </option>
                                    <option value="as new"> As new </option>
                                    <option value="good"> Good </option>
                                    <option value="to restore"> To restore </option>
                                    <option value="just renovated"> Just renovated </option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="State_of_building">State of building</label>
                                <select id="State_of_building" name="State_of_building" class="form-control">
                                    <option selected value="to be done up"> To be done up </option>
                                    <option value="as new"> As new </option>
                                    <option value="good"> Good </option>
                                    <option value="to restore"> To restore </option>
                                    <option value="just renovated"> Just renovated </option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="Construction_year">Année de construction</label>
                                <input type="number" min="0" class="form-control" id="construction_year" name="construction_year"
                                    placeholder="1930">
                            </div>

                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="inputAddress">Address</label>
                                <input type="text" class="form-control" id="inputAddress" name="inputAddress" placeholder="Rue Covid">
                            </div>
                            <div class="form-group">
                                <label for="inputAddress2">Number</label>
                                <input type="number" min="0" class="form-control" id="inputAddress2" name="inputAddress2" placeholder="19">
                            </div>
                        </div>
                        <div class="form-row">

                            <div class="form-group">
                                <label for="inputCity">City</label>
                                <input type="text" class="form-control" id="inputCity" name="inputCity" placeholder="Corona">
                            </div>
                        </div>
                        
                        <div class="form-row">
                            <div class="form-group">
                                <label for="rooms">Nombre de chambres</label>
                                <input type="number" min="0" class="form-control" id="rooms" placeholder="159" name="rooms">
                            </div>
                            <div class="form-group">
                                <label for="facades">Nombre de façades</label>
                                <input type="number" min="0" class="form-control" id="facades" name="facades" placeholder="2">
                            </div>

                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="House_area">Surface Habitable (m²)</label>
                                <input type="number" min="0" class="form-control" id="House_area" name="House_area" placeholder="15 025">
                            </div>
                            <div class="form-group">
                                <label for="surface">Surface du terrain (m²)</label>
                                <input type="number" min="0" class="form-control" id="surface" name="surface" placeholder="24 917" name="surface">
                            </div>
                        </div>
                        <div class="form-row">
                            <fieldset class="form-group">
                                <div class="row">
                                    <legend class="col-form-label col-md-4 pt-0">Jardin ?</legend>
                                    <div class="col-md-8">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" id="garden" name="garden"
                                                value="yes">
                                            <label class="form-check-label" for="yes">
                                                Oui
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" id="garden" name="garden"
                                                value="no" checked="checked">
                                            <label class="form-check-label" for="no">
                                                Non
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset class="form-group col-md-6">
                                <div class="row">
                                    <legend class="col-form-label col-md-4 pt-0">Terrasse ?</legend>
                                    <div class="col-md-8">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" id="terrace" name="terrace"
                                                value="yes">
                                            <label class="form-check-label" for="yes">
                                                Oui
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" id="terrace" name="terrace"
                                                value="no" checked="checked">
                                            <label class="form-check-label" for="no">
                                                Non
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6 display">
                                <label for="garden-area">Surface du jardin (m²)</label>
                                <input type="number" min="0" class="form-control" id="garden-area" placeholder="23 920"
                                    name="garden-area">
                            </div>
                            <div class="form-group col-md-6 display">
                                <label for="terrace-area">Surface du terrasse (m²)</label>
                                <input type="number" min="0" class="form-control" id="terrace-area" placeholder="24 917"
                                    name="terrace-area">
                            </div>
                        </div>
                        <div class="form-row">
                            <fieldset class="form-group col-md-6">
                                <div class="row">
                                    <legend class="col-form-label col-md-4 pt-0">Open fire ?</legend>
                                    <div class="col-md-8">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" id="open-fire" name="open-fire"
                                                value="yes">
                                            <label class="form-check-label" for="yes">
                                                Oui
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" id="open-fire" name="open-fire"
                                                value="no" checked="checked">
                                            <label class="form-check-label" for="no">
                                                Non
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset class="form-group col-md-6">
                                <div class="row">
                                    <legend class="col-form-label col-md-4 pt-0">Piscine ?</legend>
                                    <div class="col-md-8">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" id="swimming-pool"
                                                name="swimming-pool" value="yes">
                                            <label class="form-check-label" for="yes">
                                                Oui
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" id="swimming-pool"
                                                name="swimming-pool" value="no" checked="checked">
                                            <label class="form-check-label" for="no">
                                                Non
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                        </div>

                        <div class="form-row">
                            <fieldset class="form-group col-md-6">
                                <div class="row">
                                    <legend class="col-form-label col-md-4 pt-0">Cuisine equipé ?</legend>
                                    <div class="col-md-8">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="equiped-kitchen" value="yes"
                                                id="equiped-kitchen">
                                            <label class="form-check-label" for="yes">
                                                Oui
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="equiped-kitchen" value="no"
                                                checked="checked" id="equiped-kitchen">
                                            <label class="form-check-label" for="no">
                                                Non
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                        </div>

                        <button type="submit" class="button" value="OK">Estimer</button>
                    </form>
                </div>
    </div>
</div>
    <!-- MAIN START -->

    <!-- FOOTER START -->
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color:#084c61;" >
            
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon">
            </span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav" style="margin-left:2em; margin-right:2em;">
                    <a class="nav-link active" style="color: #ffff;" href="#">A VENDRE <span class="sr-only">(current)</span></a>
                    <a class="nav-link" style="color: #ffff; margin-left:2em; margin-right:2em;" href="#">A LOUER</a>
                    <a class="nav-link" style="color: #ffff; margin-left:2em; margin-right:2em;" href="#">ESTMIER</a>
                    <a class="nav-link" style="color: #ffff; margin-left:2em; margin-right:2em;" href="#">AGENCES</a>
                    <a class="nav-link" style="color: #ffff; margin-left:2em; margin-right:2em;" href="#">SERVICES</a>
                </div>
                <div id="enteteimage" ><img class="enteteimage" src="assets/IMG/logoimmoeliza.png" height="300" width="auto" style="position:relative; margin-left:30em;">
            </div>

            </div>
        </nav>
    <!-- JavaScript -->
    <script src=""></script>
    <script src=""></script>
    <script src=""></script>
    <script src=""></script>
    <script src=""></script>
    
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</html>