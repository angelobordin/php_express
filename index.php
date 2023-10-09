<?php

require __DIR__ . '/vendor/autoload.php';

use App\http\Router;
use App\utils\View;
use WilliamCosta\DatabaseManager\Database;

define("URL", 'http://localhost:8000');
define("DB_HOST", 'localhost');
define("DB_NAME", 'mz_mvc_project');
define("DB_USER", 'root');
define("DB_PASS", 'root');
define("DB_PORT", '3306');

// DEFINE AS CONFIGURAÇÕES DE BANCO DE DADOS
Database::config(DB_HOST, DB_NAME, DB_USER, DB_PASS, DB_PORT);

// DEFINE O VALOR PADRÃO DAS VÁRIAVEIS
View::init(["URL" => URL]);

// INICIA O ROUTER
$Router = new Router(URL);

// INCLUE AS ROTAS DE PÁGINAS
include __DIR__ . '/routes/pages.php';

// IMPRIME O RESPONSE DA ROTA
$Router->run()->sendResponse();