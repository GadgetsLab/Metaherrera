<?php

namespace App\Models;

use App\Models\Model;
class Products extends Model
{

    protected $table = 'products';

    public function create($nombre, $imagen, $descripcion, $id_cat)
    {
        $prepare = $this->connection->prepare("INSERT INTO $this->table (nombre, descripcion, imagen, id_cat) VALUES (:nombre, :descripcion, :imagen, :id_cat)");
        $prepare->bindParam(":nombre", $nombre, \PDO::PARAM_STR);
        $prepare->bindParam(":descripcion", $descripcion, \PDO::PARAM_STR);
        $prepare->bindParam(":imagen", $imagen, \PDO::PARAM_STR);
        $prepare->bindParam(":id_cat", $id_cat, \PDO::PARAM_INT);
        $prepare->execute();
    }
    public function update($id, $nombre, $descripcion, $id_cat)
    {
        $prepare = $this->connection->prepare("UPDATE $this->table SET nombre = :nombre,  descripcion = :descripcion, id_cat = :id_cat WHERE id = :id");
        $prepare->bindParam(":nombre", $nombre, \PDO::PARAM_STR);
        $prepare->bindParam(":descripcion", $descripcion, \PDO::PARAM_STR);
        $prepare->bindParam(":id_cat", $id_cat, \PDO::PARAM_INT);
        $prepare->bindParam(":id", $id, \PDO::PARAM_INT);
        $prepare->execute();
    }

}