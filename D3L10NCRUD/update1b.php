<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
    <title>Update b</title>
</head>

<body>
<h2>Modificar datos del cliente</h2>

<?php include 'DB/ClienteDB.php';
$clienteDB = new ClienteDB();
$cliente = $clienteDB->getClientePorId($_POST['id']);
?>

<form action="update1c.php" method="GET">
    <label for="especie">Nombre:</label>
    <input type="text" name="Nombre" value=" <?= $cliente['Nombre'] ?> ">
    <br>
    <label for="raza">Edad:</label>
    <input type="text" name="Edad" value="<?= $cliente['Edad'] ?>">
    <br>
    <label for="nombre">Correo:</label>
    <input type="text" name="correo" value=" <?= $cliente['correo'] ?> ">
    <br>
    <label for="nombre">Contraseña:</label>
    <input type="text" name="contraseña" value=" <?= $cliente['contraseña'] ?> ">
    <br>
    <input type="hidden" name="id" value="<?= $cliente['id'] ?> ">
    <br>
    <input type="submit" value="Modificar">
</form>
</body>
</html>