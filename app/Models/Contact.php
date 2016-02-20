<?php

namespace App\Models;

use App\Models\Model;
class Contact extends Model
{
    protected $table = 'contact';
    public function create($direccion,$correo, $telefono, $descripcion){
        $prepare = $this->connection->prepare("UPDATE $this->table SET direccion = :direccion,  correo = :correo, telefono = :telefono, descripcion = :descripcion");
        $prepare->bindParam(":direccion", $direccion, \PDO::PARAM_STR);
        $prepare->bindParam(":correo", $correo, \PDO::PARAM_STR);
        $prepare->bindParam(":telefono", $telefono, \PDO::PARAM_INT);
        $prepare->bindParam(":descripcion", $descripcion, \PDO::PARAM_STR);
        $prepare->execute();
    }
}