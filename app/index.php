<?php

include 'controllers/TodosController.php';

$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH); // extract the URL request by user

switch($url)
{
    case '/':
        echo 'página inicial';
    break;

    case '/todos':
        TodosController::index();
    break;

    case '/todo':
        TodosController::show();
    break;

    case '/todos/form':
        TodosController::form();
    break;

    case '/todos/edit':
        TodosController::edit();
    break;

    default:
        echo "Erro 404";
    break;
}