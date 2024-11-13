<?php

class Router{

    public function route(){
        
        // Récupère l'URL actuelle de la requête
        $currentUrl = $_SERVER['REQUEST_URI'];
        
        // Affiche l'URL actuelle avec var_dump
        var_dump($currentUrl);
        

    }


}

?>