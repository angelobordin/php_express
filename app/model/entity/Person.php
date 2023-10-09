<?php

namespace App\model\entity;

use \PDOStatement;
use WilliamCosta\DatabaseManager\Database;

class Person
{
    private int $id;
    private string $name;
    private string $cpf;

    public function registerPerson()
    {
        $this->id = (new Database('person'))->insert([
            'name' => $this->name,
            'cpf' => $this->cpf,
        ]);

        echo "<pre>";
        print_r("DIABLO DAO CASLJKNFASNJFKBASFBNASJKLFHSHL");
        print_r($this);
        echo "</pre>";
    }

    public static function getPersonRegisters($where = null, $order = null, $limit = null, $fields = '*'): PDOStatement
    {
        return (new Database('person'))->select($where, $order, $limit, $fields);
    }
}