<?php

namespace App\controller\pages;
use App\utils\View;

class Home {
    public static function getHome(): string {
        return View::render('pages/home', [
            'name' => 'Angelo Bordin',
            'description' => 'Descrição do texto'
        ]);
    }
}