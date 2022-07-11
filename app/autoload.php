<?php

/**
 * Controller, Model and Dao needs to contain only one Class and 
 its name is the same of the file. This method is possible to 
 map the include of the file if it is a controller, model or DAO class.
 It is mandatory to use the same class name in the routes to map acoordly.
 *

 */
spl_autoload_register(function ($class_name) {

  $class_controller = 'controllers/' . $class_name . '.php';
  $class_model = 'models/' . $class_name . '.php';
  $class_dao = 'DAO/' . '.php';

  if (file_exists($class_controller)) {

    include $class_controller;
  } else if (file_exists($class_name)) {

    include $class_model;
  } else if (file_exists($class_dao)) {

    include $class_dao;
  } else {

    echo 'Classe: {$class_name} não encontrada!';
  }
});
