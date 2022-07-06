<?php

class TodosController
{
    public static function index()
    {
        include 'views/modules/todos/ListTodos.php';
    }   

    public static function form()
    {
        include 'views/modules/todos/FormTodo.php';
    }

    public static function show()
    {
        include 'views/modules/todos/ShowTodo.php';
    }

    public static function edit()
    {
        include 'views/modules/todos/FormTodo.php';
    }

    public static function update()
    {
        include 'views/modules/todos/FormTodo.php';
    }

    public static function delete()
    {
        echo "Deleting";
    }
}
?>