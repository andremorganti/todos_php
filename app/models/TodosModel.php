<?php

class TodosModel
{
    public $id = '';
    public $name = '';
    public $status = '';
    public $creation_date = '';

    public $rows, $row;

    public function save()
    {
        include 'DAO/TodosDao.php';

        $dao = new TodosDao();

        $dao->insert($this);
    }

    public function getAllRows()
    {
        include 'DAO/TodosDao.php';

        $dao = new TodosDao();

        $this->rows = $dao->select();
    }

    public function getById($id)
    {
        include 'DAO/TodosDao.php';

        $dao = new TodosDao();

        $this->rows = $dao->selectById($id);

    }

    public function delete(int $id)
    {
        include 'DAO/TodosDao.php';

        $dao = new TodosDao();

        $dao->delete($id);
    }
}