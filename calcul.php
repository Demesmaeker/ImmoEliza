<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css"> -->
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
    <!-- ***** HEADER START ***** -->

    <!--<header class="container-fluid" id="header">-->

    <nav class="navbar navbar-default">
        <div class="container-fluid bg-primary">

            <div class="navbar-header">

                <a href="#" class="navbar-brand">Immo Eliza</a>
            
            </div>
            <ul class="nav navbar-nav">
            
                <li><a href="#">A Vendre</a></li>
                <li><a href="#">A Louer</a></li>
                <li><a href="#">Estimer</a></li>
                <li><a href="#">Agences</a></li>
                <li><a href="#">Services</a></li>


            </ul>
        
        </div>
    </nav>



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
                                            <input type="checkbox" checked data-toggle="toggle" data-width="100" data-height="150" data-on="Service" data-off="Check"  data-onstyle="dark" data-offstyle="warning">
                                        </label>
                                    <div class="btn btn-primary justify-content-start" class="keep" style="width:6.1rem;">
                                        Service
                                    </div>
                                </div>
                                <div class="col-1 m-3">
                                        <label>
                                            <input type="checkbox" checked data-toggle="toggle" data-width="100" data-on="Bungaloo" data-height="150" data-off="Check"  data-onstyle="dark" data-offstyle="warning">
                                        </label>
                                    <button class="btn btn-primary" class="keep" style="width:6.1rem;">
                                        Bungaloo
                                    </button>
                                </div>
                                <div class="col-1 m-3">
                                        <label>
                                            <input type="checkbox" checked data-toggle="toggle" data-width="100" data-on="Duplex" data-height="150" data-off="Check"  data-onstyle="dark" data-offstyle="warning">
                                        </label>
                                    <button class="btn btn-primary" class="keep" style="width:6.1rem;">
                                        Duplex
                                    </button>
                                </div>
                                <div class="col-1 m-3">
                                        <label>
                                            <input type="checkbox" checked data-toggle="toggle" data-width="100" data-on="Simple" data-height="150" data-off="Check"  data-onstyle="dark" data-offstyle="warning">
                                        </label>
                                    <button class="btn btn-primary" class="keep" style="width:6.1rem;">
                                        Maison
                                    </button>
                                    </div>
                                <div class="col-1 m-3">
                                        <label>
                                            <input type="checkbox" checked data-toggle="toggle" data-width="100" data-on="Campagne" data-height="150" data-off="Check"  data-onstyle="dark" data-offstyle="warning">
                                        </label>
                                    <button class="btn btn-primary" class="keep" style="width:6.1rem;">
                                        Campagne
                                    </button>
                                </div>
                                <div class="col-1 m-3">
                                    <label>
                                        <input type="checkbox" checked data-toggle="toggle" data-width="100" data-on="Town" data-height="150" data-off="Check"  data-onstyle="dark" data-offstyle="warning">
                                    </label>
                                    <button class="btn btn-primary" class="keep" style="width:6.1rem;">
                                        Ville
                                    </button>
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-1 m-3">
                                    <label>
                                        <input type="checkbox" checked data-toggle="toggle" data-width="100" data-on="Manor" data-height="150" data-off="Check"  data-onstyle="dark" data-offstyle="warning">
                                    </label>
                                    <button class="btn btn-primary" class="keep" style="width:6.1rem;">
                                        Manoir
                                    </button>
                                </div>
                                <div class="col-1 m-3">

                                    <label>
                                        <input type="checkbox" checked data-toggle="toggle" data-width="100" data-on="Mix" data-height="150" data-off="Check"  data-onstyle="dark" data-offstyle="warning">
                                    </label>
                                    <button class="btn btn-primary" class="keep" style="width:6.1rem;">
                                        Mix
                                    </button>
                                </div>
                                <div class="col-1 m-3">

                                    <label>
                                        <input type="checkbox" checked data-toggle="toggle" data-width="100"  data-on="Exceptional" data-height="150" data-off="Check"  data-onstyle="dark" data-offstyle="warning">
                                    </label>

                                    <button class="btn btn-primary" class="keep" style="width:6.1rem;">
                                        Exceptionnel
                                    </button>
                                </div>
                                <div class="col-1 m-3">
                                    <label>
                                        <input type="checkbox" checked data-toggle="toggle" data-width="100"  data-on="TRIPLEX" data-height="150" data-off="Check"  data-onstyle="dark" data-offstyle="warning">
                                    </label>
                                    <button class="btn btn-primary" class="keep" style="width:6.1rem;">
                                        Triplex
                                    </button>
                                </div>
                                <div class="col-1 m-3">
                                    <label>
                                        <input type="checkbox" checked data-toggle="toggle" data-width="100"  data-on="House" data-height="150" data-off="Check"  data-onstyle="dark" data-offstyle="warning">
                                    </label>
                                    <button class="btn btn-primary" class="keep" style="width:6.1rem;">
                                        Villa
                                    </button>
                                </div>
                                <div class="col-1 m-3">
                                    <label>
                                        <input type="checkbox" checked data-toggle="toggle" data-width="100"  data-on="YOLO" data-height="150" data-off="Check"  data-onstyle="dark" data-offstyle="warning">
                                    </label>
                                    <button class="btn btn-primary" class="keep" style="width:6.1rem;">
                                        Spatiale
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
                                            <input type="checkbox" checked data-toggle="toggle" data-width="100" data-height="50"  data-off="Appt" data-on="<i class='fas fa-building'></i> Appartement" data-onstyle="info" data-offstyle="success">
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
                                            <input type="checkbox" checked data-toggle="toggle" data-width="100" data-height="150" data-on="Service" data-off="Check"  data-onstyle="dark" data-offstyle="warning">
                                        </label>
                                    <div class="btn btn-primary justify-content-start" class="keep" style="width:6.1rem;">
                                        Service
                                    </div>
                                </div>
                                <div class="col-1 m-3">
                                        <label>
                                            <input type="checkbox" checked data-toggle="toggle" data-width="100" data-on="Bungaloo" data-height="150" data-off="Check"  data-onstyle="dark" data-offstyle="warning">
                                        </label>
                                    <button class="btn btn-primary" class="keep" style="width:6.1rem;">
                                        Bungaloo
                                    </button>
                                </div>
                                <div class="col-1 m-3">
                                        <label>
                                            <input type="checkbox" checked data-toggle="toggle" data-width="100" data-on="Duplex" data-height="150" data-off="Check"  data-onstyle="dark" data-offstyle="warning">
                                        </label>
                                    <button class="btn btn-primary" class="keep" style="width:6.1rem;">
                                        Duplex
                                    </button>
                                </div>
                                <div class="col-1 m-3">
                                        <label>
                                            <input type="checkbox" checked data-toggle="toggle" data-width="100" data-on="Simple" data-height="150" data-off="Check"  data-onstyle="dark" data-offstyle="warning">
                                        </label>
                                    <button class="btn btn-primary" class="keep" style="width:6.1rem;">
                                        Maison
                                    </button>
                                    </div>
                                <div class="col-1 m-3">
                                        <label>
                                            <input type="checkbox" checked data-toggle="toggle" data-width="100" data-on="Campagne" data-height="150" data-off="Check"  data-onstyle="dark" data-offstyle="warning">
                                        </label>
                                    <button class="btn btn-primary" class="keep" style="width:6.1rem;">
                                        Campagne
                                    </button>
                                </div>
                                <div class="col-1 m-3">
                                    <label>
                                        <input type="checkbox" checked data-toggle="toggle" data-width="100" data-on="Town" data-height="150" data-off="Check"  data-onstyle="dark" data-offstyle="warning">
                                    </label>
                                    <button class="btn btn-primary" class="keep" style="width:6.1rem;">
                                        Ville
                                    </button>
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-1 m-3">
                                    <label>
                                        <input type="checkbox" checked data-toggle="toggle" data-width="100" data-on="Manor" data-height="150" data-off="Check"  data-onstyle="dark" data-offstyle="warning">
                                    </label>
                                    <button class="btn btn-primary" class="keep" style="width:6.1rem;">
                                        Manoir
                                    </button>
                                </div>
                                <div class="col-1 m-3">

                                    <label>
                                        <input type="checkbox" checked data-toggle="toggle" data-width="100" data-on="Mix" data-height="150" data-off="Check"  data-onstyle="dark" data-offstyle="warning">
                                    </label>
                                    <button class="btn btn-primary" class="keep" style="width:6.1rem;">
                                        Mix
                                    </button>
                                </div>
                                <div class="col-1 m-3">

                                    <label>
                                        <input type="checkbox" checked data-toggle="toggle" data-width="100"  data-on="Exceptional" data-height="150" data-off="Check"  data-onstyle="dark" data-offstyle="warning">
                                    </label>

                                    <button class="btn btn-primary" class="keep" style="width:6.1rem;">
                                        Exceptionnel
                                    </button>
                                </div>
                                <div class="col-1 m-3">
                                    <label>
                                        <input type="checkbox" checked data-toggle="toggle" data-width="100"  data-on="TRIPLEX" data-height="150" data-off="Check"  data-onstyle="dark" data-offstyle="warning">
                                    </label>
                                    <button class="btn btn-primary" class="keep" style="width:6.1rem;">
                                        Triplex
                                    </button>
                                </div>
                                <div class="col-1 m-3">
                                    <label>
                                        <input type="checkbox" checked data-toggle="toggle" data-width="100"  data-on="House" data-height="150" data-off="Check"  data-onstyle="dark" data-offstyle="warning">
                                    </label>
                                    <button class="btn btn-primary" class="keep" style="width:6.1rem;">
                                        Villa
                                    </button>
                                </div>
                                <div class="col-1 m-3">
                                    <label>
                                        <input type="checkbox" checked data-toggle="toggle" data-width="100"  data-on="YOLO" data-height="150" data-off="Check"  data-onstyle="dark" data-offstyle="warning">
                                    </label>
                                    <button class="btn btn-primary" class="keep" style="width:6.1rem;">
                                        Spatiale
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
                                            <input type="checkbox" checked data-toggle="toggle" data-width="100" data-height="150" data-on="Service" data-off="Check"  data-onstyle="dark" data-offstyle="warning">
                                        </label>
                                    <div class="btn btn-primary justify-content-start" class="keep" style="width:6.1rem;">
                                        Service
                                    </div>
                                </div>
                                <div class="col-1 m-3">
                                        <label>
                                            <input type="checkbox" checked data-toggle="toggle" data-width="100" data-on="Bungaloo" data-height="150" data-off="Check"  data-onstyle="dark" data-offstyle="warning">
                                        </label>
                                    <button class="btn btn-primary" class="keep" style="width:6.1rem;">
                                        Bungaloo
                                    </button>
                                </div>
                                <div class="col-1 m-3">
                                        <label>
                                            <input type="checkbox" checked data-toggle="toggle" data-width="100" data-on="Duplex" data-height="150" data-off="Check"  data-onstyle="dark" data-offstyle="warning">
                                        </label>
                                    <button class="btn btn-primary" class="keep" style="width:6.1rem;">
                                        Duplex
                                    </button>
                                </div>
                                <div class="col-1 m-3">
                                        <label>
                                            <input type="checkbox" checked data-toggle="toggle" data-width="100" data-on="Simple" data-height="150" data-off="Check"  data-onstyle="dark" data-offstyle="warning">
                                        </label>
                                    <button class="btn btn-primary" class="keep" style="width:6.1rem;">
                                        Maison
                                    </button>
                                    </div>
                                <div class="col-1 m-3">
                                        <label>
                                            <input type="checkbox" checked data-toggle="toggle" data-width="100" data-on="Campagne" data-height="150" data-off="Check"  data-onstyle="dark" data-offstyle="warning">
                                        </label>
                                    <button class="btn btn-primary" class="keep" style="width:6.1rem;">
                                        Campagne
                                    </button>
                                </div>
                                <div class="col-1 m-3">
                                    <label>
                                        <input type="checkbox" checked data-toggle="toggle" data-width="100" data-on="Town" data-height="150" data-off="Check"  data-onstyle="dark" data-offstyle="warning">
                                    </label>
                                    <button class="btn btn-primary" class="keep" style="width:6.1rem;">
                                        Ville
                                    </button>
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-1 m-3">
                                    <label>
                                        <input type="checkbox" checked data-toggle="toggle" data-width="100" data-on="Manor" data-height="150" data-off="Check"  data-onstyle="dark" data-offstyle="warning">
                                    </label>
                                    <button class="btn btn-primary" class="keep" style="width:6.1rem;">
                                        Manoir
                                    </button>
                                </div>
                                <div class="col-1 m-3">

                                    <label>
                                        <input type="checkbox" checked data-toggle="toggle" data-width="100" data-on="Mix" data-height="150" data-off="Check"  data-onstyle="dark" data-offstyle="warning">
                                    </label>
                                    <button class="btn btn-primary" class="keep" style="width:6.1rem;">
                                        Mix
                                    </button>
                                </div>
                                <div class="col-1 m-3">

                                    <label>
                                        <input type="checkbox" checked data-toggle="toggle" data-width="100"  data-on="Exceptional" data-height="150" data-off="Check"  data-onstyle="dark" data-offstyle="warning">
                                    </label>

                                    <button class="btn btn-primary" class="keep" style="width:6.1rem;">
                                        Exceptionnel
                                    </button>
                                </div>
                                <div class="col-1 m-3">
                                    <label>
                                        <input type="checkbox" checked data-toggle="toggle" data-width="100"  data-on="TRIPLEX" data-height="150" data-off="Check"  data-onstyle="dark" data-offstyle="warning">
                                    </label>
                                    <button class="btn btn-primary" class="keep" style="width:6.1rem;">
                                        Triplex
                                    </button>
                                </div>
                                <div class="col-1 m-3">
                                    <label>
                                        <input type="checkbox" checked data-toggle="toggle" data-width="100"  data-on="House" data-height="150" data-off="Check"  data-onstyle="dark" data-offstyle="warning">
                                    </label>
                                    <button class="btn btn-primary" class="keep" style="width:6.1rem;">
                                        Villa
                                    </button>
                                </div>
                                <div class="col-1 m-3">
                                    <label>
                                        <input type="checkbox" checked data-toggle="toggle" data-width="100"  data-on="YOLO" data-height="150" data-off="Check"  data-onstyle="dark" data-offstyle="warning">
                                    </label>
                                    <button class="btn btn-primary" class="keep" style="width:6.1rem;">
                                        Spatiale
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    </div>
</div>
    <!-- MAIN START -->

    <!-- FOOTER START -->
    <nav class="navbar navbar-default">
        <div class="container-fluid bg-primary">

            <div class="navbar-header">

                <a href="#" class="navbar-brand">Immo Eliza</a>
            
            </div>
            <ul class="nav navbar-nav">
            
                <li><a href="#">A Vendre</a></li>
                <li><a href="#">A Louer</a></li>
                <li><a href="#">Estimer</a></li>
                <li><a href="#">Agences</a></li>
                <li><a href="#">Services</a></li>


            </ul>
        
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