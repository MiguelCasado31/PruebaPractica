<?php
require_once '../modelo/modelo_comunidad.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $modeloComunidad = new ComunidadModel();

    $accion = isset($_POST['accion']) ? $_POST['accion'] : '';

    switch ($accion) {
        case 'alta':
            $nombre = $modeloComunidad->limpiarDato($_POST['nombre']);
            $direccion = $modeloComunidad->limpiarDato($_POST['direccion']);
            $poblacion = $modeloComunidad->limpiarDato($_POST['poblacion']);
            $id_administrador = $modeloComunidad->limpiarDato($_POST['id_administrador']);
            $modeloComunidad->altaComunidad($nombre, $direccion, $poblacion, $id_administrador);
            echo "Comunidad Creada Correctamente";
            break;
        case 'eliminar':
            // Implementar la lógica para eliminar equipo
            break;
        case 'actualizar':
            // Implementar la lógica para actualizar equipo
            break;
        case 'listar':
            // Implementar la lógica para listar equipos
            break;
        case 'consultarID':
            // Implementar la lógica para consultar equipo por ID
            break;
    }
}
?>
