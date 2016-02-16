<?php
/**
 * Created by PhpStorm.
 * User: RDuuke
 * Date: 15/02/2016
 * Time: 06:25 PM
 */

namespace App\Models;
use App\Models\Model;

class Sliders extends Model
{
    protected $table = 'slide';

    public function create($imagen, $titulo, $subtitulo)
    {
        $prepare = $this->connection->prepare("INSERT INTO $this->table (imagen, titulo, subtitulo ) VALUES (:imagen, :titulo, :subtitulo)");
        $prepare->bindParam(":imagen", $imagen, \PDO::PARAM_STR);
        $prepare->bindParam(":titulo", $titulo, \PDO::PARAM_STR);
        $prepare->bindParam(":subtitulo", $subtitulo, \PDO::PARAM_STR);
        $prepare->execute();
    }

    public function update($titulo, $subtitulo, $id)
    {
        $prepare = $this->connection->prepare("UPDATE $this->table SET titulo=:titulo, subtitulo=:subtitulo WHERE id =:id");
        $prepare->bindParam(":titulo", $titulo, \PDO::PARAM_STR);
        $prepare->bindParam(":subtitulo", $subtitulo, \PDO::PARAM_STR);
        $prepare->bindParam(":id", $id, \PDO::PARAM_INT);
        $prepare->execute();
    }
}