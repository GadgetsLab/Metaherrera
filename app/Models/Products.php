<?php

namespace App\Models;

use App\Models\Model;
class Products extends Model
{

    protected $table = 'products';

    public function create($titulo, $imagen, $descripcion)
    {
        $prepare = $this->connection->prepare("INSERT INTO $this->table (nombre, descripcion, imagen) VALUES (:nombre, :descripcion, :imagen)");
        $prepare->bindParam(":nombre", $nombre, \PDO::PARAM_STR);
        $prepare->bindParam(":descripcion", $descripcion, \PDO::PARAM_STR);
        $prepare->bindParam(":imagen", $imagen, \PDO::PARAM_STR);
        $prepare->execute();
    }
    public function update($id, $titulo, $imagen, $descripcion)
    {
        $prepare = $this->connection->prepare("UPDATE $this->table SET nombre = :nombre,  descripcion = :descripcion, imagen = :imagen WHERE id = :id");
        $prepare->bindParam(":nombre", $nombre, \PDO::PARAM_STR);
        $prepare->bindParam(":descripcion", $descripcion, \PDO::PARAM_STR);
        $prepare->bindParam(":imagen", $imagen, \PDO::PARAM_STR);
        $prepare->bindParam(":id", $id, \PDO::PARAM_INT);
        $prepare->execute();
    }

}