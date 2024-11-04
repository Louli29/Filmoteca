<?php

$serveur = "localhost";
$utilisateur = "root";
$mot_de_passe = "";
$BD = "filmoteca";
$conn = new mysqli($serveur, $utilisateur, $mot_de_passe, $BD);


$req="SELECT title,year,synopsis,genre FROM movie ";
$resultatReq=$conn->query($req);

    

?>




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

        <h3>Liste Films : </h3>
        <table>
            <thead><tr>
                <td>Titre</td>
                <td >Année de sortie </td>
                <td>Synopsis </td>
                <td >Genre </td>
                
            </tr></thead>
            <tbody>
            <?php 
            for ($i=0 ; $i<$resultatReq->num_rows ; $i++){
                $row = $resultatReq->fetch_assoc();
                
            ?>
                <tr>
                <td><?php echo $row["title"]?></td>
                <td > <?php echo $row["year"]?></td>
                <td><?php echo $row["synopsis"]?></td>
                <td ><?php echo $row["genre"]?></td>
                
                </tr>
            <?php }
            ?>
            </tbody>

        </table>


    </main>

    <footer class="fPage"> </footer>

</body>

</html>
