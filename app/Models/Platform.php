<?php


namespace App\Models;
use App\Models\Model;

class Platform extends Model
{
    protected $table = 'about';

    public function create($titulo, $contenido, $opcion){
        $prepare = $this->connection->prepare("UPDATE $this->table SET titulo_$opcion = :titulo,  $opcion = :contenido");
        $prepare->bindParam(":titulo", $titulo, \PDO::PARAM_STR);
        $prepare->bindParam(":contenido", $contenido, \PDO::PARAM_STR);
        $prepare->execute();
    }

}