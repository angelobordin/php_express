<?php

use App\controller\pages\About;
use App\controller\pages\Person;
use App\http\Response;
use \App\controller\pages\Home;

$Router->get("/", [
    function () {
        return new Response(200, Home::getHome());
    }
]);

$Router->get("/sobre", [
    function () {
        return new Response(200, About::getAbout());
    }
]);

$Router->get("/pagina/{paginaId}/{action}", [
    function ($paginaId, $action) {
        return new Response(200, 'Página ' . $paginaId . '- ' . $action);
    }
]);

$Router->get("/person/list", [
    function ($request) {
        return new Response(200, Person::personList($request));
    }
]);

$Router->post("/person/register", [
    function ($request) {
        return new Response(200, Person::registerPerson($request));
    }
]);