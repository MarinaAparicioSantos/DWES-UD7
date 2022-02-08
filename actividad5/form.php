<?php
$error = "";
$resultado = "";
$numero1 = "";
$numero2 = "";

$url = 'https://www.crcind.com/csp/samples/SOAP.Demo.CLS?WSDL';

$uri = 'https://www.crcind.com/csp/samples/SOAP.Demo.CLS?WSDL';
$cliente = new SoapClient(null, array('location' => $url, 'uri' => $uri));


if (isset($_POST['numero1']) && isset($_POST['numero2'])) {

    $numero1 = $_POST['numero1'];
    $numero2 = $_POST['numero2'];

    if (!empty($_POST['numero1']) && !empty($_POST['numero2'])) {
    } else {
        $error = "<strong>Error:</strong>";
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="/estilo.css">
</head>

<body>
    <form action="actividad5.php" method="post">
        <?php
        print "<input type='number' name='numero1'>";
        print "<input type='number' name='numero2'>";
        print "<input type='submit' name='enviar' value='enviar'>";
        print "<p class='error'>$error</p>";
        print "<p>$resultado</p>";
        ?>
    </form>
</body>

</html>