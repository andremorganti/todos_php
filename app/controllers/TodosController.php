<?php

class TodosController
{
    public static function index()
    {
        include 'models/TodosModel.php';

        $model = new TodosModel();
        $model->getAllRows();

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

    public static function save()
    {
        include 'Models/TodosModel.php';

        $model = new TodosModel();
        $model->name = $_POST['name'];
        $model->creation_date = $_POST['creation_date'];
        $model->status = $_POST['status'];
        
        $model->save();

        header('Location: /todos');
    }

    public static function delete()
    {

        include 'Models/TodosModel.php';
        
        $id = $_GET['id'];
        $model->delete($id);

        header('Location: /todos');
    }
}
?>