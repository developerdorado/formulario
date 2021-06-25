<?php
header('Content-Type: application/json; charset=ISO-8859-1');
require("../config/database.php");

$nombre_completo = (isset($_POST['nombre_completo']) && $_POST['nombre_completo'] != NULL) ? $_POST['nombre_completo'] : 'Vacio';
$country = (isset($_POST['country']) && $_POST['country'] != NULL) ? $_POST['country'] : 'Vacio';
$celular = (isset($_POST['celular']) && $_POST['celular'] != NULL) ? $_POST['celular'] : 'Vacio';
$email = (isset($_POST['email']) && $_POST['email'] != NULL) ? $_POST['email'] : 'Vacio';

if($nombre_completo == "Vacio" || $country == "Vacio" || $celular == "Vacio" || $email == "Vacio"){
    echo json_encode(array("success" => "false", "error" => "Ningun campo puede estar vacio."));
}else{
    $registro = $pdo->prepare("INSERT INTO clientes (nombre_completo, country, celular, email) VALUES (:nombre_completo, :country, :celular, :email)");
    $registro->bindParam(':nombre_completo', $nombre_completo);
    $registro->bindParam(':country', $country);
    $registro->bindParam(':celular', $celular);
    $registro->bindParam(':email', $email);
    if($registro->execute()){
        echo json_encode(array("success" => "true", "message" => "Guardado correctamente."));
    }else{
        echo json_encode(array("success" => "false", "error" => "Error interno del servidor."));
    }
    
}



