<?php

$json = [ "layers" => array("/img/7843_layer_3.svg", "/img/7843_layer_2.svg", "/img/7843_layer_1.svg"),
		  "companyName" => "Company name",
		  "companyNameFont" => "verdana",
		  "slogan" => "slogan",
		  "sloganFont"=> "verdana"
		];	

echo json_encode ( $json );

?>