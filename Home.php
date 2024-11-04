<!DOCTYPE html>
<html>
<head>
    <title>Filmoteca Accueil</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="Home.css">
</head>

<body>

    <header>
        <h1> Bienvenue sur Filmoteca </h1>
    </header>

    <main>

        <h3>Les Derniers Ajouts : </h3>
        <div class="mesFichesFilm">
<?php 
for ($i=0 ; $i<5 ; $i++){
?>

        <article>
            <h4>Titre du film</h4>
            <h5>Mon commentaire : </h5> 
            <p> blabla  </p>
            <footer> 
                <h5>Ma note : </h5> 
            </footer>
        </article>
<?php }
?>
        </div>
       


    </main>

    <footer> </footer>

</body>

</html>
