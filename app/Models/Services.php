<?php


namespace App\Models;


class Services extends Model
{
    protected $table = 'services';

    public function create($nombre, $imagen, $descripcion)
    {
        $prepare = $this->connection->prepare("INSERT INTO $this->table (nombre, descripcion, imagen) VALUES (:nombre, :descripcion, :imagen)");
        $prepare->bindParam(":nombre", $nombre, \PDO::PARAM_STR);
        $prepare->bindParam(":descripcion", $descripcion, \PDO::PARAM_STR);
        $prepare->bindParam(":imagen", $imagen, \PDO::PARAM_STR);
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