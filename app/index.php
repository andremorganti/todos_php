<?php

$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH); // extract the URL request by user

switch($url)
{
    case '/':
        echo 'página inicial';
    break;

    case '/todos':
        echo 'lista todos';
    break;

    case '/todos/form':
        echo 'formulário para salvar todos';
    break;

    default:
        echo "Erro 404";
    break;
}