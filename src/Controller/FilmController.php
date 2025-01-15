<?php

declare(strict_types=1);

namespace App\Controller;

use App\Core\TemplateRenderer;
use App\Entity\Film;
use App\Repository\FilmRepository;
use App\Service\EntityMapper;

class FilmController
{
    private TemplateRenderer $renderer;
    private EntityMapper $entityMapper;
    private FilmRepository $filmRepository;

    public function __construct()
    {
        $this->renderer = new TemplateRenderer();
        $this->entityMapper= new EntityMapper();
        $this->filmRepository = new FilmRepository();
    }

    public function list(array $queryParams)
    {
        $films = $this->filmRepository->findAll();

        if(isset($_POST["read"])){
            $filmId = intval($_POST['film_id']);
            $this->read($filmId);
            exit();
        }

        if(isset($_POST["modifier"])){
            $filmId = intval($_POST['film_id']);
            $this->update($filmId);
            exit();
        }

        /* $filmEntities = [];
        foreach ($films as $film) {
            $filmEntity = new Film();
            $filmEntity->setId($film['id']);
            $filmEntity->setTitle($film['title']);
            $filmEntity->setYear($film['year']);
            $filmEntity->setType($film['type']);
            $filmEntity->setSynopsis($film['synopsis']);
            $filmEntity->setDirector($film['director']);
            $filmEntity->setCreatedAt(new \DateTime($film['created_at']));
            $filmEntity->setUpdatedAt(new \DateTime($film['updated_at']));

            $filmEntities[] = $filmEntity;
        } */

        //dd($films);

        echo $this->renderer->render('film/list.html.twig', [
            'films' => $films,
        ]);

        // header('Content-Type: application/json');
        // echo json_encode($films);

        if(isset($_POST["delete"])){//fonctionne seulement si je clique 2 fois sur supprimé...
            $filmId = intval($_POST['film_id']);
            $this->delete($filmId);
            exit();
        }

        


    }

    public function create() :void
    {
        
        if ($_POST != null){
            $film=new Film();
            $film=$this->entityMapper->mapToEntity($_POST, Film::class);
            $this->filmRepository->create($film);
            header('Location: /film/list');
        }

        echo $this->renderer->render('film/create.html.twig');
    }

    public function read(int $filmId)
    {

        $film = $this->filmRepository->find($filmId);
        echo $this->renderer->render('film/read.html.twig', [
            'film' => $film,
        ]);
        
    }

    public function update(int $filmId) :void
    {

        $film = $this->filmRepository->find($filmId);
        echo $this->renderer->render('film/update.html.twig', [
            'film' => $film,
        ]);
        $data[
            'title'=> $_POST['title'],
            'year'=>$_POST['year'] ,
            'type'=> $_POST['type'],
            'synopsis'=>$_POST['synopsis'],
            'director'=>$_POST['director']

        ]
        if(isset($_POST["modifierValid"])){
            $nvFilm=$this->entityMapper->mapToEntity($data, Film::class);
            $this->filmRepository->update($filmId, $nvFilm);
            header('Location: /film/list');
            
        }
        
        
        
    }

    public function delete(int $filmId) :void
    {
        $this->filmRepository->delete($filmId);
    }
}
