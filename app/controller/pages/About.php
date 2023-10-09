<?php

namespace App\controller\pages;

use App\utils\View;
use App\model\entity\Organization;

class About extends Page
{
    public static function getAbout(): string
    {
        $organization = new Organization();
        $content = View::render('pages/about', [
            'name' => $organization->name,
            'description' => $organization->description
        ]);

        return self::getPage('Sobre', $content);
    }
}