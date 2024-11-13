<?php

namespace App\Core;

class Router{

    public function route(){
        
        // Récupère l'URL actuelle de la requête
        $currentUrl = trim(parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH),'/');
        $queryParams=$_GET;//ce qu'on met en info après le nom de la page

        $routes=[
            'films'=> 'FilmController',
            'contact'=> 'ContactController',
        ];

        if(array_key_exists($url,$routes)){
            $controlleurName='App\\Controller\\'.$routes[$url];
            $controller=new $controlleurName();

            $controller->index($queryParams);
        }else{
            echo "404 not found"
        }
    }


}

?>