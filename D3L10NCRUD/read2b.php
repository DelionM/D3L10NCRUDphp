<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
    <title>Por <?= $_GET['especie'] ?></title>
</head>

<body>
<h2>Mascotas de especie <?= $_GET['especie'] ?></h2>
<table>
    <tr>
        <th>Nombre</th>
        <th>Raza</th>
        <th>Edad</th>
    </tr>

    <?php include 'DB/MascotaDB.php';
    $especie = $_GET['especie'];
    $mascotaDB = new MascotaDB();//
    $mascotas = $mascotaDB->getMascotasPorEspecie($especie);
    foreach ($mascotas as $mascota):?>
        <tr>
            <td><?= $mascota['nombre'] ?></td>
            <td><?= $mascota['raza'] ?></td>
            <td><?= $mascota['edad'] ?></td>
        </tr>
    <?php endforeach;?>

</table>
</body>
</html>

