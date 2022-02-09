<?php

//divide

$wsdl = 'https://www.crcind.com/csp/samples/SOAP.Demo.CLS?WSDL'; //URL de nuestro servicio soap

//Basados en la estructura del servicio armamos un array

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$params = array(
		"Arg1" => $_POST["numero1"],
		"Arg2" => $_POST["numero2"]
	);

	$options = array(
		"uri" => $wsdl,
		"style" => SOAP_RPC,
		"use" => SOAP_ENCODED,
		"soap_version" => SOAP_1_1,
		"cache_wsdl" => WSDL_CACHE_BOTH,
		"connection_timeout" => 15,
		"trace" => false,
		"encoding" => "UTF-8",
		"exceptions" => false,
	);

//Enviamos el Request
$soap = new SoapClient($wsdl, $options);
$result = $soap->DivideInteger($params)->DivideIntegerResult; //Aquí cambiamos dependiendo de la acción del servicio que necesitemos ejecutar
echo $result;
}
?>

<!DOCTYPE html>
<html>

<head>
	<link rel="stylesheet" type="text/css" href="/estilo.css">
</head>

<body>
	<form action="" method="post">
		<?php
		print "<input type='number' name='numero1'>";
		print "<input type='number' name='numero2'>";
		print "<input type='submit' name='enviar' value='enviar'>";
		?>
	</form>
</body>

</html>