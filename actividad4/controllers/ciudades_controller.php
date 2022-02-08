<?php

function mostrarCiudadServidor(){

    require "./models/ciudades_model.php";


// Instanciamos un nuevo servidor SOAP
$uri="http://localhost/DWES-UD7/actividad4/";
$server = new SoapServer(null,array('uri'=>$uri));
$server->addFunction("getCiudad");
$server->handle();



}
