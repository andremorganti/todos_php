<?php

class TodosController
{
    public static function index()
    {
        include_once 'models/TodosModel.php';

        $model = new TodosModel();
        $model->getAllRows();

        include_once 'views/modules/todos/ListTodos.php';
    }   

    public static function show()
    {
        include_once 'views/modules/todos/ShowTodo.php';
    }

    public static function new(){
        include_once 'models/TodosModel.php';

        $model = new TodosModel();
        $model->id = null;
        $model->name = null;
        $model->creation_date = date("d/m/Y");
        $model->status = null;

        include_once 'views/modules/todos/FormTodo.php';
    }

    public static function edit()
    {
        include_once 'models/TodosModel.php';

        $model = new TodosModel();
        $model = $model->getById((int) $_GET['id']);

        //$model = array_slice($model, 0, 1);
        
        include_once 'views/modules/todos/FormTodo.php';
    }

    public static function form()
    {
        include_once 'views/modules/todos/FormTodo.php';
    }


    public static function save()
    {
        include_once 'models/TodosModel.php';

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

        include_once 'models/TodosModel.php';
        $model = new TodosModel();
        
        $id = $_GET['id'];
        $model->delete($id);

        header('Location: /todos');
    }
}
?>