<?php 
$curl = curl_init('https://api.immoeliza.ml/swagger.json');
curl_setopt($curl, CURLOPT_CAINFO, __DIR__ . DIRECTORY_SEPARATOR . 'cert.cer');  //certificat 
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);  // faire en sorte que ça ne soit pas affiche
$data = curl_exec($curl);    // mettre les element de l'api dans la variable curl
if ($data === false) { 
    var_dump(curl_error($curl));
} else {
    $data = json_decode($data, true);
    echo '<pre>';
    var_dump($data['paths']['/predict']['parameters']['0']['name']);  //afficher l'element qu'il y a dans Paths/predict/parameters/1/nom
    echo '</pre>';
}

curl_close($curl);
?>