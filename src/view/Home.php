<?php

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

        <h3>Liste Films : </h3>
        <table>
            <thead><tr>
                <td>  Titre  </td>
                <td >Année de sortie </td>
                <td>Synopsis </td>
                <td >Genre </td>
                
            </tr></thead>
            <tbody>
            <?php 
            $films= new FilmController();            
            foreach (){
                $row = $resultatReq->fetch_assoc();
                
            ?>
                <tr>
                <td><b><?php echo $row["title"]?></b></td>
                <td > <?php echo $row["year"]?></td>
                <td><?php echo $row["synopsis"]?></td>
                <td ><?php echo $row["genre"]?></td>
                
                </tr>
            <?php }
            ?>
            </tbody>

        </table>


    </main>

    <footer> 
    <p>&copy; 2023 Filmoteca. All rights reserved.</p>
    </footer>

</body>

</html>
