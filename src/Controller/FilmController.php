<?php
declare(strict_types=1);

namespace App\Controller;

use App\Repository\FilmRepository;

class FilmController
{
    public function list()
    {
        $filmRepository = new FilmRepository();
        $films = $filmRepository->findAll();

        /*$filmEntities=[];
        foreach($films as $film ){
            $filmEntity=new Film();
            $filmEntity->setId($film['id']);
            $filmEntity->setTitle($film['title']);
            $filmEntity->setYear($film['year']);
            $filmEntity->setType($film['type']);
            $filmEntity->setSynopsis($film['synopsis']);
            $filmEntity->setDirector($film['director']);
            $filmEntity->setDeletedAt($film['deletedAt']);
            $filmEntity->setCreatedAt($film['createdAt']);
            $filmEntity->setUpdateAt($film['updatedAt']);

            $filmEntities[]=$filmEntity;
        }
            */

        header('Content-Type: application/json');
        echo json_encode($films);
    }

    public function create()
    {
        echo "Création d'un film";
    }

    public function read()
    {
        echo "Lecture d'un film";
    }

    public function update()
    {
        echo "Mise à jour d'un film";
    }

    public function delete()
    {
        echo "Suppression d'un film";
    }
}
?>