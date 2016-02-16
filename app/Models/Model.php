<?php

namespace App\Models;


use Config\Connection;

abstract class Model extends Connection
{
    protected $table;
    protected $primaryKey = 'id';
    protected $connection;

    /**
     * All method, returns all the model data
     * @return mixed
     */
    public function all(){
        $result = $this->connection->query("SELECT * FROM $this->table");
        if($result->rowCount() > 1){
            $result = $result->fetchAll(\PDO::FETCH_OBJ);
        }else{
            $result = $result->fetch(\PDO::FETCH_OBJ);
        }
        
        return $result;
    }

    /**
     * Find method, search for the primary key in the model
     * @param $id int
     * @return mixed
     */
    public function find($id){
        $data = $this->connection->query("SELECT * FROM $this->table WHERE $this->primaryKey = $id");
        $data = $data->fetch(\PDO::FETCH_OBJ);
        return $data;
    }

    /**
     * Destroy method removes a record model for its primary key
     * @param $id
     */
    public function destroy($id)
    {
        $this->connection->query("DELETE FROM $this->table WHERE id = $id");
    }

    /**
     * @return mixed
     */
    public function last()
    {
        $data = $this->connection->query("SELECT * FROM $this->table ORDER BY id DESC LIMIT 1");
        $data = $data->fetch(\PDO::FETCH_OBJ);
        return $data;
    }

    /**
     * @return mixed
     */
    public function first(){
        $data = $this->connection->query("SELECT * FROM $this->table ORDER BY id ASC LIMIT 1");
        $data = $data->fetch(\PDO::FETCH_OBJ);
        return $data;
    }

    /**
     * @param $sql
     * @return bool
     */
    public function where($sql){
        $data = $this->connection->query("SELECT * FROM $this->table WHERE $sql");
        if($data->rowCount() > 1){
            $data = $data->fetchAll(\PDO::FETCH_OBJ);
        }elseif($data->rowCount() == 1){
            $data = $data->fetch(\PDO::FETCH_OBJ);
        }else{
            return false;
        }
        return $data;
    }
    public function upOrdown($id, $opcion){
        if($opcion == 1){
            $data = $this->connection->query("UPDATE $this->table SET estado = 1 WHERE id = $id");
        }else{
            $data = $this->connection->query("UPDATE $this->table SET estado = 0 WHERE id = $id");
        }
    }

}