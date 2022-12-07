<?php

try {

    $conexion = new PDO("mysql:host=localhost;port=3306;dbname=bd_asistencia", "root", "");
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

    $res = $conexion->query('SELECT * FROM datos') or die(print($conexion->errorInfo()));

    $data = [];

    while($item = $res->fetch(PDO::FETCH_OBJ)) {

        $data[] = [
            'codigodatos' => $item->codigodatos,
            'fecha' => $item->fecha,
            'hora' => $item->hora,
            'tipo' => $item->tipo,
            'hermanos' => $item->hermanos,
            'niños' => $item->niños,
            'visitas' => $item->visitas,
            'total_hermanos' => $item->total_hermanos
        ];

    }

    echo json_encode($data);

} catch(PDOException $error) {

    echo $error->getMessage();
    die();

}