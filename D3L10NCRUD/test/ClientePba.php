<?php
include '../DB/clienteDB.php';
$clienteDB = new ClienteDB();

print('imprime cliente por nombre: ');
print ('<br>');
$nombre = $ClienteDB->getClienteporNombre('Juan Lopez Lopez');
foreach($nombre as $nombre){
    printf("\n%s %s %s %s", $nombre['Nombre'], $nombre['edad'], $nombre['correo'], $nombre['contraseña'], '<br>');
}
print ('<br>');

/////HASTA AQUI JALA BIEN CREO
//'INSERT INTO cliente (Nombre, Edad, correo, contraseña) 
print('Inserta Cliente ');
$clienteDB->insertaCliente('ARR', 20, '@arr', 55655);
print ('<br>');

print('Cliente por Id: ');
print ('<br>');
$nombres = $clienteDB->getClientePorId(2);
foreach($nombres as $nombre){
    printf("\n%s %s %s %s", $nombre['nombre'], $nombre['edad'], $nombre['correo'], $nombre['contraseña'], '<br>');
}

//$nombre['nombre'], $edad['edad: '], $correo['correo'], $contraseña['contraseña: '], '<br>'

print('imprime todos los cliente: ');
print ('<br>');
$nombre = $clienteDB->getNombreC();
foreach($nombre as $nombre){
    printf("\n%s %s", $nombre['Nombre'], '<br>');
}
print ('<br>');

print ('<br>');