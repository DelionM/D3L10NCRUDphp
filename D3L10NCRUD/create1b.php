<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
    <title>Inserta</title>
</head>

<body>
<h2>Cliente añadida</h2>

<?php include 'DB/ClienteDB.php';
$clienteDB = new ClienteDB();
$clienteDB->insertaCliente($_POST['Nombre'], $_POST['Edad'], $_POST['correo'], $_POST['contraseña']); ?>

</body>
</html>
