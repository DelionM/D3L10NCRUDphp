<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
    <title>Update b</title>
</head>

<body>
<h2>Cliente modificada</h2>
</body>
</html>

<?php
include 'DB/ClienteDB.php';
$clienteDB = new ClienteDB();
$clienteDB->updateClientePorId($_GET);