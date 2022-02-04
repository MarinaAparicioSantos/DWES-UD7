<?php
// Instanciamos un nuevo servidor SOAP
$uri="http://192.168.129.133/DWES-UD7/";
$server = new SoapServer(null,array('uri'=>$uri));
$server->addFunction("parImpar");
$server->handle();

// Función para obtener raíz cuadrada
// function sumar($numero1,$numero2) {
//     $resultado = $numero1 + $numero2;
//     return $resultado;
// }

function parImpar($numero){

    if($numero%2==0){

        return "Par";

    }else{

        return "Impar";
    }


}
?>