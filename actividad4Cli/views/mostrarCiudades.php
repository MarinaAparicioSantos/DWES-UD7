<!DOCTYPE html>
<html>
    <head>
        <title>Calcular la suma de 2 números - Servicio Web + PHP + SOAP</title>
        <link rel="stylesheet" type="text/css" href="/estilo.css">
    </head>
<body>
    <h1>Obtener ciudades</h1>
    <h2>Servicio Web + PHP + SOAP</h2>
    <form action="index.php?controller=ciudadesCli&action=mostrarCiudad" method="post">
    <?php
        print "<input type='number' name='poblacion'>";
        print "<input type='submit' name='enviar' value='Calcular Letra'>";
        print "<p class='error'>$error</p>";
        print "<p>$resultado</p>";
    ?>
    </form>
</body>
</html>