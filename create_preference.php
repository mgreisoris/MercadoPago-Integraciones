<?php

ini_set('display_errors',1);  error_reporting(E_ALL);
require_once "../lib/mercadopago.php";
 
 

$mp = new MP('7569353044896978', 'ETntaYS2lcyV0eLpG0wqb809RAm2Lh9N'); //poner credenciales del mayorista
 
$preference_data = array (
    "items" => array(
        array(
            "title" => "Reserva de turismo",
            "quantity" => 1,
            "currency_id" => "ARS",
            "unit_price" => floatval($_POST['monto']),
			
			"category_id"=>"travel"
		)
    ),
	"payer" => array(
		"name" =>$_POST ['nombre'],
		"surname"=>$_POST ['apellido'],
		"email"=>$_POST ['email'],
		"identification"=> array(
			
				"type" =>$_POST ['tipo_dni'],
				"number" =>$_POST ['nro']
				
								)
		
		
					),
	"external_reference" => $_POST['file'],
	"expires"=> false,
	"sponsor_id" => 204442777 
	
	
);

$preference = $mp->create_preference($preference_data);

echo $preference["response"]['init_point'];

?>

