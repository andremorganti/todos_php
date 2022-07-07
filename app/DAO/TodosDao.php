<?php

class TodosDAO
{
    private $conn;

    public function __construct()
    {
        $dsn = "mysql:host=mysql_db:3306;dbname=todos_db";
        $this->conn = new PDO($dsn, 'root', 'root');
    }

    public function insert(TodosModel $model)
    {
        $sql = "INSERT INTO todos (name, status, creation_date) VALUES (?, ?, ?)";

        $stmt = $this->conn->prepare($sql);
        $stmt->bindValue(1, $model->name);
        $stmt->bindValue(2, $model->status);
        $stmt->bindValue(3, $model->creation_date);

        $stmt->execute();
    }

    public function update(TodosModel $model)
    {
        $sql = "UPDATE todos set (name=?, status=?, creation_date=?) WHERE id = ?";

        $stmt = $this->conn->prepare($sql);
        $stmt->bindValue(1, $model->name);
        $stmt->bindValue(2, $model->status);
        $stmt->bindValue(3, $model->creation_date);

        $stmt->execute();
    }

    public function select()
    {
        $sql = "SELECT * FROM todos";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_CLASS);
    }

    public function selectById($id)
    {
        $sql = "SELECT * FROM todos WHERE id = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_CLASS);        
    }

    public function delete(int $id)
    {

        $sql = "DELETE FROM todos WHERE id = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindValue(1, $id);

        $stmt->execute();
    }
}