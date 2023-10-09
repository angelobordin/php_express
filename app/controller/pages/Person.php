<?php

namespace App\controller\pages;

use App\http\Request;
use App\utils\View;
use App\model\entity\Person as PersonEntity;

class Person extends Page
{
    public static function registerPerson(Request $request)
    {
        $postVars = $request->getPostVars();

        $newPerson = new PersonEntity;
        $newPerson->name = $postVars['name'];
        $newPerson->cpf = $postVars['cpf'];
        $newPerson->registerPerson();

        return self::personList($request);
    }

    private static function getPersonRegisters($request)
    {
        $registers = '';



        $results = PersonEntity::getPersonRegisters();

        while ($obPerson = $results->fetchObject(PersonEntity::class)) {
            $registers .= View::render('pages/person/person', [
                'id' => $obPerson->id,
                'name' => $obPerson->name,
                'cpf' => $obPerson->cpf,
            ]);
        }

        return $registers;
    }

    public static function personList($request)
    {
        $contentView = View::render('pages/personList', [
            'registers' => self::getPersonRegisters($request)
        ]);
        return parent::getPage("LISTA DE PESSOAS", $contentView);
    }

    public static function updatePersonById()
    {
    }

    public static function deletePersonById()
    {
    }

}