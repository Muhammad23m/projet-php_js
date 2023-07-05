<?php 
include ('connectDb.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Formulaire d'inscription</title>
</head>
<body>
    <section class="main">
        <Section class="left">
            <div class="image">
            <img src="img.png" alt="" width="200px">
            <h2>Bienvenue</h2>
            </div>
            <li><a href="apprenant_liste.php">Liste des Apprenants</a></li>
        </Section>
        <section class="right">
        <P class="title">Formulaire d'inscription</P>
            <form  id="form" action="fonction.php" enctype="multipart/form-data" method="post">
                <div class="partie1">
                    <input type="text" name="nom" id="" placeholder="nom" required>
                    <input type="text" name="prenom" id="" placeholder="prénom" required>
                    <input type="text" name="age" id="" placeholder="âge" required>
                    <input type="date" name="datenaiss" id="" required>
                    <input type="email" name="email" id="" placeholder="email" required>
                </div>
                <div class="partie2">
                    <input type="text" name="telephone" id="" placeholder="téléphone" required>
                    <input type="file" name="photo" id="" required>
                    <input type="text" name="promotion" id="" placeholder="P1 P2 P3..." required>
                    <input type="text" name="anneeCertification" id="" placeholder="année de certification" required>
                    <button name="valider" type="submit">Enregistrer</button>
                </div>
           </form>
       </section>

    </section>
    
  

</body>
</html>