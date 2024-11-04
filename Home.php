<!DOCTYPE html>
<html>
<head>
    <title>Filmoteca Accueil</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="Home.css">
</head>

<body>

    <header>
        <h1> Bienvenue sur Filmoteca </h1>
    </header>

    <main>

        <h3>Les Derniers Ajouts : </h3>
        
        <div class="mesFichesFilm">
            <?php 
            for ($i=0 ; $i<3 ; $i++){
            ?>

            <article>
                <h4>Titre du film</h4>
                <h5>Mon commentaire : </h5> 
                <p> blabla  </p> 
                <h5>Ma note : </h5> 
                
            </article>
            <?php }
            ?>
        </div>

       


    </main>

    <footer class="fPage"> </footer>

</body>

</html>
