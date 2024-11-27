<?php

declare(strict_types=1);

namespace App\Controller;

use App\Entity\Film;
use App\Repository\FilmRepository;

class FilmController
{
    public function list(array $queryParams)
    {
        $filmRepository = new FilmRepository();
        $films = $filmRepository->findAll();

        $htmlTemplate = file_get_contents('/var/www/filmoteca/src/view/List.html');

        // Générer les lignes de la table
        $rows = '';
        foreach ($films as $film) {
            $rows .= '<tr>';
            $rows .= '<td>' . htmlspecialchars($film->getTitle()) . '</td>';
            $rows .= '<td>' . htmlspecialchars($film->getType()) . '</td>';
            $rows .= '<td>' . htmlspecialchars($film->getYear()) . '</td>';
            $rows .= '<td>' . htmlspecialchars($film->getDirector()) . '</td>';
            $rows .= '<td>' . htmlspecialchars($film->getSynopsis()) . '</td>';
            $rows .= '</tr>';
        }

        // Remplacer le placeholder {{films}} dans le HTML
        $htmlOutput = str_replace('{{films}}', $rows, $htmlTemplate);

        return $htmlOutput;

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


        // header('Content-Type: application/json');
        // echo json_encode($films);
    }

    public function create()
    {
        echo "Création d'un film";
    }

    public function read(array $queryParams)
    {
        $filmRepository = new FilmRepository();
        $film = $filmRepository->find((int) $queryParams['id']);

        dd($film);
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