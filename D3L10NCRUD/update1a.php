<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
    <title>Modificar Cliente</title>
</head>

<body>
<h2>Modificar Cliente</h2>
<form action="update1b.php" method="POST">

    <label for="id">Clientes:</label>
    <select list="clientes" name="id">
        <?php
        include 'DB/ClienteDB.php';
        $clienteDB = new ClienteDB();
        $clientes = $clienteDB->getCliente();
        foreach ($clientes as $cliente):?>
            <option value="<?= $cliente['id'] ?>"> <?= $cliente['Nombre'] ?> <?= $cliente['Edad'] ?> <?= $cliente['correo'] ?><?= $cliente['contraseña'] ?></option>
        <?php endforeach ?>
    </select>

    <input type="submit" value="Elegir">

</form>
</body>
</html>