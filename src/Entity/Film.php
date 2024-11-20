<?php

class Film{

    $id;
    $title;
    $year;
    $genre;
    $synopsis;
    $director;
    $deleted_at;
    $created_at;

    public Film(){
        $id=$_GET['id'];
        $title=$_GET['title'];
        $year=$_GET['year'];
        $genre=$_GET['typer'];
        $synopsis=$_GET['synopsis'];
        $director=$_GET['director'];
        $deleted_at=$_GET['deleted_at'];
        $created_at=$_GET['created_at'];
        $updated_at=$_GET['updated_at'];
        
        
    }


}



?>