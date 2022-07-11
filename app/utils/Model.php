<?php

class TodosModel
{
    public $id = '';

    public $rows, $row;

    public function save()
    {
        include 'DAO/TodosDao.php';

        $dao = new TodosDao();

        if ($this->id != ''){
            $dao->update($this);
        } else {
            $dao->insert($this);
        }

    }

    public function getAllRows()
    {
        include 'DAO/TodosDao.php';

        $dao = new TodosDao();

        $this->rows = $dao->select();
    }

    public function getById(int $id)
    {
        include 'DAO/TodosDao.php';

        $dao = new TodosDao();

        return $dao->selectById($id);

    }

    public function delete(int $id)
    {
        include 'DAO/TodosDao.php';

        $dao = new TodosDao();

        $dao->delete($id);
    }
}