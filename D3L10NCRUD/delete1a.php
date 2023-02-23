<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
    <title>Delete a</title>
</head>

<body>
<h2>Eliminar Cliente</h2>
<form action="delete1b.php" method="GET">

    <label for="id">Cliente:</label>
    <select list="clientes" name="id">
        <?php include 'DB/ClienteDB.php';
        $clienteDB = new ClienteDB();
        $clientes = $clienteDB->getCliente();
        foreach ($clientes as $cliente): ?>
            <option value="<?= $cliente['id'] ?> "> <?= $cliente['Nombre'] ?> <?= $cliente['Edad'] ?> <?= $cliente['correo'] ?> <?= $cliente['contraseña'] ?></option>
        <?php endforeach; ?>

        <input type="submit" value="Elegir">

</form>
</body>
</html>