<?php

require __DIR__ . '/vendor/autoload.php';

use App\http\Router;
use App\utils\View;
use WilliamCosta\DatabaseManager\Database;

define("URL", 'http://localhost:8000');

// DEFINE O VALOR PADRÃO DAS VÁRIAVEIS
View::init(["URL" => URL]);

// INICIA O ROUTER
$Router = new Router(URL);

// INCLUE AS ROTAS DE PÁGINAS
include __DIR__ . '/routes/pages.php';

// IMPRIME O RESPONSE DA ROTA
$Router->run()->sendResponse();