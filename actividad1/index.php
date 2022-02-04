<?php
// Vaciamos algunas variables
$error = "";
$resultado = "";
$suma = "";
$numero1 = "";
$numero2 = "";

// Iniciamos el cliente SOAP
// Escribimos la dirección donde se encuentra el servicio
// $url = "https://www.raulprietofernandez.net/images/blog/211/DNI/calcularLetra.php";
$url = "http://192.168.129.126/DWES-UD7/calcularLetra.php";
// $uri = "https://www.raulprietofernandez.net/images/blog/211/DNI/";
$uri = "http://192.168.129.126/DWES-UD7/";
$cliente = new SoapClient(null, array('location' => $url, 'uri' => $uri));

// Ejecutamos las siguientes líneas al enviar el formulario
if (isset($_POST['enviar'])) {
    $numero1 = $_POST['numero1'];
    $numero2 = $_POST['numero2'];
    // Establecemos los parámetros de envío
    if (!empty($_POST['numero1']) && !empty($_POST['numero2'])) {
        // Si los parámetros son correctos, llamamos a la función letra de calcularLetra.php
        $resultado = "El resultado es: " . $cliente->sumar($_POST['numero1'],$_POST['numero2']);
    } else {
        $error = "<strong>Error:</strong> Debes introducir una suma correcta<br/><br/>Ej: 45678987";
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
    <h1>Obtener letra DNI</h1>
    <h2>Servicio Web + PHP + SOAP</h2>
    <form action="index.php" method="post">
    <?php
        print "<input type='number' name='numero1' value='$numero1'>";
        print "<input type='number' name='numero2' value='$numero2'>";
        print "<input type='submit' name='enviar' value='Calcular Letra'>";
        print "<p class='error'>$error</p>";
        print "<p>$resultado</p>";
    ?>
    </form>
    <div id="footer">Creado con <span class="red">♥</span> por: <a href="https://www.raulprietofernandez.net/">Raúl Prieto Fernández</a></div>
</body>
</html>