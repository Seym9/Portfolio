<?php

namespace App\Model\Database;

abstract class Manager {

    protected $query;
    protected $prepare;
    protected $pdo;

    public function __construct()
    {
        $this->pdo = Database::getDB();
    }


    protected function query($statement){
        $this->query = $this->pdo->query($statement);
        return $this->query;
    }

    protected function prepare($statement){
        $this->prepare = $this->pdo->prepare($statement);
        return $this->prepare;
    }
}