<?php

require "model.php";
// Instanciamos un nuevo servidor SOAP
$uri="http://192.168.129.133/DWES-UD7/";
$server = new SoapServer(null,array('uri'=>$uri));
$server->addFunction("getCiudad");
$server->handle();

var_dump(getCiudad($numero));    


?>