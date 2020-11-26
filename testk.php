<?php

// $curl = curl_init('https://api.immoeliza.ml/predict');
// $data = curl_exec($curl);

// if ($data === false) {
//     var_dump(curl_error($curl));
// } else {

// }
// curl_close($curl);
?>


<?php

// $url = 'https://api.immoeliza.ml/swagger.json';
// $url = 'https://api.immoeliza.ml/';
$url = 'https://api.immoeliza.ml/predict';

$ch = curl_init($url);

//setup request to send json via POST
$data = array (
    "ZIP" => 6200,
    "type_of_property" => "house",
    "subtype_of_property" => "house",
    "number_of_rooms" => 2,
    "house_area" => 50,
    "surface_of_the_land" => 150,
    "number_of_facades" => 4,
    "swimming_pool" => 1,
    "state_of_the_building" => "neuf",
    "road" => "rue des haies",
    "number" => 170
);

$payload = json_encode($data);
// echo $payload;

curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);

curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // to avoid ssl certificate problem

curl_setopt($ch, CURLOPT_CAINFO, __DIR__ . DIRECTORY_SEPARATOR . 'cert.cer');  //certificat 

curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');

curl_setopt($ch, CURLOPT_URL, $url);

$result = curl_exec($ch);

echo(curl_error($ch));

curl_close($ch);

$data = json_decode($result, true);

var_dump($data);



?>

