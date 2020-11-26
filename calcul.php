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

    <!-- PHP --> 
    <?php  
  // This condition checks if form is submitted...
  if ((!isset($_POST['rue'])) || (!isset($_POST['rue'])) || (!isset($_POST['rue']))){
    //echo 'not yet submitted';      
  } else {   
    // error handle
    // ------------
    $error_handle = [];
    $debug = [];
    $feedback = [];
    
    // pré validation, les champs doivent exister et ne pas être vide.
    if ((isset($_POST["cp"]) && !empty(trim($_POST["cp"]))) && (isset($_POST["rue"]) && !empty(trim($_POST["rue"]))) && (isset($_POST["numero"]) && !empty(trim($_POST["numero"])))){
      // function declaration
      // --------------------
      function get_api_output($p_url){
        $url = $p_url;
        $data = array('key1' => 'value1', 'key2' => 'value2');

        // use key 'http' even if you send the request to https://...
        $options = array(
            'http' => array(
                'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
                'method'  => 'POST',
                'content' => http_build_query($data)
            )
        );
        $context  = stream_context_create($options);
        $result = file_get_contents($url, false, $context);
        if ($result === FALSE) {
           /* Handle error */           
          return null;
        } else {
          return $result;
        }
        
      }
      
      // 1. Sanitisation
      // ---------------
   
      // anti xss
      $cp = filter_var($_POST["cp"], FILTER_SANITIZE_STRING);
      $rue = filter_var($_POST["rue"], FILTER_SANITIZE_STRING);
      $numero = filter_var($_POST["numero"], FILTER_SANITIZE_STRING);     
   
      // trim enlève les blancs à gauche et à droite
      $cp = trim($cp);
      $rue = trim($rue);
      $numero = trim($numero);

      // 2. Validation
      // -------------
      
      // validation CP
      // Test si $variable est un code postal
      // le cp belge vas de 1000 à 9999 (4 chiffres)
            
      if (preg_match("#^[0-9]{4}$#",$cp)){
          //echo "le CP est valide.";
      } else {
        $error_handle['cp'] = "Le CP n'est pas valide. (Veuillez encoder un CP valide numérique entre 1000 et 9999)."; 
      }

      if(count($error_handle) == 0){
        // amélioration de l'expérience d'encodage coté utilisateur   
        // --------------------------------------------------------   
        // on supprime les blancs en trop entre les mots !
        $rue = preg_replace('#[\s]+#', ' ', $rue);

        // 3. execution
        // ----------
        // If we get here, it's because everything's fine, we can do the next step
        // Fetch API with our data
        // Data from HTML <form>
        array_push($debug, "<u><b>Sanitized Data from HTML form</b></u>");                     
        array_push($debug, "cp : ".$cp);      
        array_push($debug, "rue : ".$rue);      
        array_push($debug, "numero : ".$numero);  
        
        // API GET request
        // -----------
        // Base URL: https://static.wallonia.ml/file/wallonia-lidar/web/
        array_push($debug, '<u><b>API request</u></b>');
                        
        // Etape 1: Point d’entrée, les code postaux
        // -----------------------------------------
        $result_cp_collection = get_api_output("http://static.wallonia.ml/file/wallonia-lidar/web/postal_codes.json");

        if ($result_cp_collection === null){
          $error_handle['no API connection'] = "No API connection (check your URL API please...)" ;
        } else {
          
        // decode string output json to php object or php associative array ("key" => "value")
        // ----------------------------------------------------------------
        // arg2 option not set or set to false will give a php object
        // arg2 option set to true will give a php associative array
        $array_cp = json_decode($result_cp_collection, true);

        // check if user cp is in the array
        // --------------------------------
        if (array_key_exists ($cp, $array_cp)){
          array_push($debug, "Le code postal existe dans l'API");
        } else {
          $error_handle['cp not exist'] = "Le code postal n'existe pas dans l'API !";
        }
        
        if(count($error_handle) == 0){
          // Etape 2: Obtenir les rues de la ville
          // -------------------------------------
          // ok now that we have the cp
          // let us get all the street of that cp
          $result_street_collection = get_api_output("http://static.wallonia.ml/file/wallonia-lidar/web/$cp.json");

          if ($result_street_collection === null){
            $error_handle['no API connection'] = "No API connection (check your URL API please...)" ;
          } else {  
            // json decode
            $array_street = json_decode($result_street_collection, true); 
                  
            // to compare data string API, we create new variables in lower caser
            // rue_lower_case and array_street_lower_case
            $rue_lower_case = strtolower($rue);
            $array_street_lower_case = array_change_key_case($array_street,CASE_LOWER);
          
            // check if user street is in the array      
            if (array_key_exists ($rue_lower_case, $array_street_lower_case)){
              array_push($debug, "La rue existe dans l'API");
            } else {
              $error_handle['rue not exist'] = "La rue n'existe pas dans l'API !";
            }
            
            if(count($error_handle) == 0){
              // get value of key representing the street            
              $id_street = $array_street_lower_case[$rue_lower_case];
              array_push($debug, "l'ID de la rue est : ".$id_street);
                          
              // Etape 3: Obtenir l’id unique de la maison
              // -----------------------------------------
              // ok now that we have the cp and the street
              // let us get all the number of house in that street
              $result_house_collection = get_api_output("http://static.wallonia.ml/file/wallonia-lidar/web/$cp/$id_street.json");

              if ($result_house_collection === null){
                $error_handle['no API connection'] = "No API connection (check your URL API please...)" ;
              } else {  
                // json decode
                $array_house = json_decode($result_house_collection, true); 

                // check if user numero of house is in the array
                // ---------------------------------------------
                if (array_key_exists ($numero, $array_house)){
                  array_push($debug, "Le numéro de maison existe dans l'API");
                } else {
                  $error_handle['house number is not into API'] = "Le numéro de maison n'existe pas dans l'API !";
                }
                
                if(count($error_handle) == 0){
                  // get value of key representing the unique house 
                  // ----------------------------------------------
                  $id_house = $array_house[$numero];     
                      
                  // 4. debug, Display the response interface.
                  // --------------------------------------------
                  // envoi de id_house finale dans le champ <p id="id_house">
                  // il servira pour le relais js 3D https://api.wallonia.ml/v1/model/$id_house

                  array_push($debug, "l'ID de la maison est : ");
                  array_push($debug, '<p id="house">'.$id_house.'</p>');

                  array_push($feedback, "l'ID de la maison a bien été obtenu.");
                  array_push($feedback, '<p id="house" class="invisible">'.$id_house.'</p>');

                }
              }
            }
          }
        }
       }
      }
    } else {
      $error_handle['not a valid submission'] = 'Non Valide : ni le code postal, ni la rue et ni le numéro ne peuvent être vide.';      
    }    

  } // end if not submitted   

?>
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