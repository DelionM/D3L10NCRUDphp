<!DOCTYPE html>
<html lang="en">
    <!-- consultas -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
    <title>Muestra todas</title>
</head>

<body>
    <h1 style="font-size: 120px;">Banco D3L</h1>
    <h2 style="font-size: 70px;">El mejor banco</h2>
<table>
    <tr>
        <th> Nombre</th>
        <th> Edad</th>
        <th> Correo</th>
        <th> Contraseña</th>

    </tr>

    <?php include 'DB/ClienteDB.php';
       // mini       ppr          //mayu
    //mayu          yo        mini
    $clienteDB = new ClienteDB();
    $clientesBanco = $clienteDB->getCliente();
    foreach ($clientesBanco as $clienteNom): ?>
        <tr>
            <td><?= $clienteNom['Nombre'] ?></td>
            <td><?= $clienteNom['Edad'] ?></td>
            <td><?= $clienteNom['correo'] ?></td>
            <td><?= $clienteNom['contraseña'] ?></td>
        </tr>
    <?php endforeach ?>
</table>
</body>
</html>