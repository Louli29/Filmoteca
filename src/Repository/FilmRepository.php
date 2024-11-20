<?php

class FilmRepository{

    namespace App\Repository;
    use App\Core\DatabaseConnection;

    public function __construct(){
        $this->db=DatabaseConnection::getConnection();
    }

    public function findAll(): array{
        $query='SELECT * FROM film';
        $stmt=$this->db->query($query);
        return $stmt->fetchAll();

    }
    
}



?>