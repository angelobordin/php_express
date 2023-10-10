<?php

namespace App\model\entity;

use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
#[ORM\Table(name: 'person')]
class Person
{
    #[ORM\Id]
    #[ORM\Column(type: 'integer')]
    #[ORM\GeneratedValue]
    private int $id;

    #[ORM\Column(type: 'string', length: 100)]
    private string $name;

    #[ORM\Column(type: 'string', length: 11)]
    private string $cpf;

    private array $personList = array();

    public function registerPerson(Person $newPerson)
    {
        array_push($this->personList, $newPerson);
    }

    public function getPersonRegisters($where = null, $order = null, $limit = null, $fields = '*')
    {

        return $this->personList;
    }
}