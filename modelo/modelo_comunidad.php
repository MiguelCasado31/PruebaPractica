<?php
require_once '../config.php';

class ComunidadModel
{
    private $pdo;

    public function __construct()
    {
        $db = new Database();
        $this->pdo = $db->connect();
    }

    public function altaComunidad($nombre, $direccion, $poblacion, $id_administrador)
    {
        $sql = "INSERT INTO comunidades (nombre, direccion, poblacion, id_administrador) VALUES (:nombre, :direccion, :poblacion, :id_administrador)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([
            'nombre' => $nombre,
            'direccion' => $direccion,
            'poblacion' => $poblacion,
            'id_administrador' => $id_administrador,
        ]);
    }

    public function limpiarDato($data)
    {
        return htmlspecialchars(stripslashes(trim($data)));
    }
}
