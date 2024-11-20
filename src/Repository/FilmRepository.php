<?php

class FilmRepository{

    $dsn = 'mysql:dbname=filmoteca;host=127.0.0.1';
    $user = 'filmoteca_user';
    $password = 'filmoteca_password';

    $dbh = new PDO($dsn, $user, $password);

    
}



?>