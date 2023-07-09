<?php 
require_once "./app/Database.php";

class Todo extends Database
{
    public function getTodos($limit)
    {
        return $this->select("SELECT * FROM todos");
    }
}