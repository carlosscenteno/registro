<?php

$fecha = isset($_POST['fecha']) ? $_POST['fecha'] : '';
$hora = isset($_POST['hora']) ? $_POST['hora'] : '';
$tipo = isset($_POST['tipo']) ? $_POST['tipo'] : '';
$hermanos = isset($_POST['hermanos']) ? $_POST['hermanos'] : '';
$niños = isset($_POST['niños']) ? $_POST['niños'] : '';
$visitas = isset($_POST['visitas']) ? $_POST['visitas'] : '';
$total_hermanos = isset($_POST['total_hermanos']) ? $_POST['total_hermanos'] : '';

try {

    $conexion = new PDO("mysql:host=localhost;port=3306;dbname=bd_asistencia", "root", "");
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

    $pdo = $conexion->prepare('INSERT INTO datos(fecha, hora, tipo, hermanos, niños, visitas, total_hermanos) VALUES(?, ?, ?, ?, ?, ?, ?)');
    $pdo->bindParam(1, $fecha);
    $pdo->bindParam(2, $hora);
    $pdo->bindParam(3, $tipo);
    $pdo->bindParam(4, $hermanos);
    $pdo->bindParam(5, $niños);
    $pdo->bindParam(6, $visitas);
    $pdo->bindParam(7, $total_hermanos);
    $pdo->execute() or die(print($pdo->errorInfo()));

    echo json_encode('true');

} catch(PDOException $error) {
    echo $error->getMessage();
    die();
}