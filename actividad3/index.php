<?php
// Vaciamos algunas variables
$error = "";
$resultado = "";
$poblacion = "";

// Iniciamos el cliente SOAP
// Escribimos la dirección donde se encuentra el servicio
// $url = "https://www.raulprietofernandez.net/images/blog/211/DNI/calcularLetra.php";
$url = "http://192.168.129.133/DWES-UD7/actividad3/calcularLetra.php";
// $uri = "https://www.raulprietofernandez.net/images/blog/211/DNI/";
$uri = "http://192.168.129.133/DWES-UD7/";
$cliente = new SoapClient(null, array('location' => $url, 'uri' => $uri));

// Ejecutamos las siguientes líneas al enviar el formulario
if (isset($_POST['enviar'])) {
    $poblacion = $_POST['poblacion'];
    // Establecemos los parámetros de envío
    if (!empty($_POST['poblacion'])) {
        // Si los parámetros son correctos, llamamos a la función letra de calcularLetra.php
        $resultado = "El resultado es: " . $cliente->getCiudad($_POST['poblacion']);
    } else {
        $error = "<strong>Error:</strong> Debes introducir un numero correcto<br/><br/>Ej: 45678987";
    }
}

?>






<!DOCTYPE html>
<html>
    <head>
        <title>Calcular la suma de 2 números - Servicio Web + PHP + SOAP</title>
        <link rel="stylesheet" type="text/css" href="/estilo.css">
    </head>
<body>
    <h1>Obtener ciudades</h1>
    <h2>Servicio Web + PHP + SOAP</h2>
    <form action="index.php" method="post">
    <?php
        print "<input type='number' name='poblacion' value='$poblacion'>";
        print "<input type='submit' name='enviar' value='Calcular Letra'>";
        print "<p class='error'>$error</p>";
        print "<p>$resultado</p>";
    ?>
    </form>
    <div id="footer">Creado con <span class="red">♥</span> por: <a href="https://www.raulprietofernandez.net/">Raúl Prieto Fernández</a></div>
</body>
</html>