<?php

namespace App\controller\pages;

use App\utils\View;
use App\model\entity\Organization;

class Home extends Page
{
    public static function getHome(): string
    {
        $organization = new Organization();
        $content = View::render('pages/home', [
            'name' => $organization->name,
        ]);

        return self::getPage('Home', $content);
    }
}