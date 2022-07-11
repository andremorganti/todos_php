<?php

switch ($url) {
  case '/':
    HomeController::index();
    break;

  case '/todos':
    TodosController::index();
    break;

  case '/todo':
    TodosController::show();
    break;

  case '/todos/new':
    TodosController::new();
    break;

  case '/todos/edit':
    TodosController::edit();
    break;

  case '/todos/form':
    TodosController::form();
    break;

  case '/todos/form/save':
    TodosController::save();
    break;

  case '/todos/delete':
    TodosController::delete();
    break;

  default:
    echo "Erro 404 - Página não encontrrada!";
    break;
}
