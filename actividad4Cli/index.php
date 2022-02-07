<?php

define ("CONTROLLERS_FOLDER","controllers/");

define ("DEFAULT_CONTROLLER","ciudades");

define ("DEFAULT_ACTION","mostrarCiudad");

$controller = DEFAULT_CONTROLLER;
if (!empty ($_GET['controller']))
$controller = $_GET ['controller'];

$action = DEFAULT_ACTION;

if (!empty ($_GET['action']))
$action = $_GET ['action'];

if (!empty ($_GET['mostrarCiudades']))
$action = $_GET ['mostrarCiudades'];


$controller = CONTROLLERS_FOLDER . $controller . '_controller.php';
try{

    if(is_file($controller))
        require_once($controller);

    else
        throw new Exception('El controlador no existe - 404 not found');


    if (is_callable($action))
        $action();

    else 
        throw new Exception('La accion no existe - 404 not found');

}catch(Exception $e){

    echo 'Exception capturada '. $e->getMessage(), "\n";


}

?>