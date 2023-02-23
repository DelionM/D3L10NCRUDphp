<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
    <title>Read 3</title>
</head>

<body>
<h2>Agregar mascota</h2>
<form action="create1b.php" method="POST">

    <fieldset>
        <legend>Datos de la mascota</legend>
        <label for="cliente">Especie:</label>
        <input list="clientes" name="especie">
        <datalist id="clientes">
            <?php include 'DB/MascotaDB.php';
            $mascotaDB = new MascotaDB();
            $especies = $mascotaDB->getEspecies();
            foreach ($especies

            as $especie): ?>
            <option value="<?= $especie['especie']; ?>">
                <?php endforeach; ?>
        </datalist>

        <br>

        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre">

        <br>

        <label for="raza">Raza:</label>
        <input list="razas" name="raza">
        <datalist id="razas">
            <?php $razas = $mascotaDB->getRazas();
            foreach ($razas

            as $raza): ?>
            <option value="<?= $raza['raza'] ?>">
                <?php endforeach ?>
        </datalist>

        <br>

        <label for="edad">Edad:</label>
        <select id="edad" name="edad">
            <option value="" selected="selected">selecciona</option>
            <?php for ($i = 1; $i <= 20; $i++): ?>
                <option value="<?= $i ?>"><?= $i ?></option>
            <?php endfor ?>

            <!--
            <option value="1">1</option>\n
            <option value="2">2</option>\n
            <option value="3">3</option>\n
            ...
            <option value="20">20</option>\n
            -->

        </select>
        <input type="submit" value="Enviar">
    </fieldset>
</form>
</body>
</html>