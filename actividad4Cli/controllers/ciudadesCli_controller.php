<?php

function mostrarCiudad()
{

    $error = "";
    $resultado = "";
    $poblacion = "";

    $url = "http://localhost/DWES-UD7/actividad4/index.php?controller=ciudades&action=mostrarCiudadServidor";

    $uri = "http://localhost/DWES-UD7/actividad4/";
    $cliente = new SoapClient(null, array('location' => $url, 'uri' => $uri));

    // Ejecutamos las siguientes líneas al enviar el formulario
    if (isset($_POST['enviar'])) {
        $poblacion = $_POST['poblacion'];
        // Establecemos los parámetros de envío
        if (!empty($_POST['poblacion'])) {
            // Si los parámetros son correctos, llamamos a la función letra de calcularLetra.php

            $ciudades = $cliente->getCiudad($_POST['poblacion']);
            for ($i = 0; $i < count($ciudades); $i++) {
                echo $ciudades[$i]["nombre"] . "<br>";
            }
        } else {
            $error = "<strong>Error:</strong> Debes introducir un numero correcto<br/><br/>";
        }
    }


    include "./views/mostrarCiudades.php";
}
