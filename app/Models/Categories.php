<?php

namespace App\Models;

use App\Models\Model;
class Categories extends Model
{

    protected $table = 'categories';

    public function create($nombre, $descripcion)
    {
        $prepare = $this->connection->prepare("INSERT INTO $this->table (nombre, descripcion) VALUES (:nombre, :descripcion)");
        $prepare->bindParam(":nombre", $nombre, \PDO::PARAM_STR);
        $prepare->bindParam(":descripcion", $descripcion, \PDO::PARAM_STR);
        $prepare->execute();
    }
    public function update($id, $nombre, $descripcion)
    {
        $prepare = $this->connection->prepare("UPDATE $this->table SET nombre = :nombre,  descripcion = :descripcion WHERE id = :id");
        $prepare->bindParam(":nombre", $nombre, \PDO::PARAM_STR);
        $prepare->bindParam(":descripcion", $descripcion, \PDO::PARAM_STR);
        $prepare->bindParam(":id", $id, \PDO::PARAM_INT);
        $prepare->execute();
    }

}