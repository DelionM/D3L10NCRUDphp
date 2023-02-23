<?php
include 'conexion.php';

class ClienteDB {

    //obtiene el cliente por nombre
    public function getClienteporNombre($nombre) {
        $conexion = Conexion::getInstancia();
        $dbh = $conexion->getDbh();
        try {
            $consulta = "SELECT Nombre, edad, correo, contraseña  FROM cliente where Nombre = '$nombre'";
            $stmt = $dbh->prepare($consulta);
            $stmt->setFetchMode(PDO::FETCH_BOTH);
            $stmt->execute();
            $cliente = $stmt->fetchAll();
            $dbh = null; // cierra la conexion
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
        return $cliente;
    }

    //hasta esta parte debe de crear la consulta de los clientes debes de hacer el archivo php donde se visualicen los reultado atravez del html

    public function getCliente() {
        $conexion = Conexion::getInstancia();
        $dbh = $conexion->getDbh();
        try {
            $consulta = "SELECT * FROM cliente";
            $stmt = $dbh->prepare($consulta);
            $stmt->setFetchMode(PDO::FETCH_BOTH);
            $stmt->execute();
            $cliente = $stmt->fetchAll();
            $dbh = null; // cierra la conexion
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
        return $cliente;
    }
    //funcion de insertar las nuevos reguistros
    public function insertaCliente($Nombre, $Edad, $correo, $contraseña) {//recuertda que este es el metodo para realizar las consultas
        $conexion = Conexion::getInstancia();
        $dbh = $conexion->getDbh();
        try {
            $consulta = 'INSERT INTO cliente (Nombre, Edad, correo, contraseña) VALUES (?,?,?,?)';
            $stmt = $dbh->prepare($consulta);
            $stmt->bindParam(1, $Nombre);
            $stmt->bindParam(2, $Edad);
            $stmt->bindParam(3, $correo);
            $stmt->bindParam(4, $contraseña);
            $stmt->execute();
            $dbh = null; // cierra la conexion
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }


    //funcion para consultar los correos de los clientes
    public function getCorreo() {
        $conexion = Conexion::getInstancia();
        $dbh = $conexion->getDbh();
        try {
            $consulta = "SELECT DISTINCT correo FROM cliente";
            $stmt = $dbh->prepare($consulta);
            $stmt->setFetchMode(PDO::FETCH_BOTH);
            $stmt->execute();
            $correo = $stmt->fetchAll();
            $dbh = null; // cierra la conexion
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
        return $correo;
    }
//
    public function getNombreC() {
        $conexion = Conexion::getInstancia();
        $dbh = $conexion->getDbh();
        try {
            $consulta = "SELECT DISTINCT Nombre FROM cliente";
            $stmt = $dbh->prepare($consulta);
            $stmt->setFetchMode(PDO::FETCH_BOTH);
            $stmt->execute();
            $nombreC = $stmt->fetchAll();
            $dbh = null; // cierra la conexion
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
        return $nombreC;
    }
//este no puse
//en esta area
    public function getClientePorId($id) {
        $conexion = Conexion::getInstancia();
        $dbh = $conexion->getDbh();
        try {
            $consulta = "SELECT * FROM cliente WHERE id = ?";
            $stmt = $dbh->prepare($consulta);
            $stmt->setFetchMode(PDO::FETCH_BOTH);
            $stmt->bindParam(1, $id);
            $stmt->execute();
            // $stmt->execute([$id]);
            $cliente= $stmt->fetch();
            $dbh = null; // cierra la conexion
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
        return $cliente;
    }

    public function updateClientePorId($arreglo) {
        $conexion = Conexion::getInstancia();
        $dbh = $conexion->getDbh();
        try {
            $consulta = 'UPDATE cliente SET Nombre = ?, Edad = ?, correo = ?, contraseña = ?  WHERE id= ?';
            $stmt = $dbh->prepare($consulta);
            $stmt->bindParam(1, $arreglo['Nombre']);
            $stmt->bindParam(2, $arreglo['Edad']);
            $stmt->bindParam(3, $arreglo['correo']);
            $stmt->bindParam(4, $arreglo['contraseña']);
            $stmt->bindParam(5, $arreglo['id']);
            $stmt->execute();
            $dbh = null; // cierra la conexion
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function eliminaClientePorId($id) {
        $conexion = Conexion::getInstancia();
        $dbh = $conexion->getDbh();
        try {
            $consulta = 'DELETE FROM cliente WHERE id = ?';
            $stmt = $dbh->prepare($consulta);
            $stmt->bindParam(1, $id);
            $stmt->execute();
            //$stmt->execute([$id]);
            $dbh = null; // cierra la conexion
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    //var_dump()
    //print_r()

    //echo '<pre>';
    //print_r($variable);
    //echo '</pre>';

}