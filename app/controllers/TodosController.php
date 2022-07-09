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

    public static function show()
    {
        include 'views/modules/todos/ShowTodo.php';
    }

    public static function new(){
        include 'models/TodosModel.php';

        $model = new TodosModel();
        $model->id = null;
        $model->name = null;
        $model->creation_date = date("d/m/Y");
        $model->status = null;

        include 'views/modules/todos/FormTodo.php';
    }

    public static function edit()
    {
        include 'models/TodosModel.php';

        $model = new TodosModel();
        $model = $model->getById((int) $_GET['id']);

        //$model = array_slice($model, 0, 1);
        
        include 'views/modules/todos/FormTodo.php';
    }

    public static function form()
    {
        include 'views/modules/todos/FormTodo.php';
    }


    public static function save()
    {
        include 'models/TodosModel.php';

        $model = new TodosModel();
        $model->id = $_POST['id'];
        $model->name = $_POST['name'];
        $model->creation_date = $_POST['creation_date'];
        $model->status = $_POST['status'];
        
        $model->save();

        header('Location: /todos');
    }

    public static function delete()
    {

        include 'models/TodosModel.php';
        $model = new TodosModel();
        
        $id = $_GET['id'];
        $model->delete($id);

        header('Location: /todos');
    }
}
?>