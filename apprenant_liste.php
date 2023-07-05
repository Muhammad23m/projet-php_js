<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style2.css">
    <title>Document</title>
</head>
<body>
    <div>
        <h3 class="title">Listes des Apprenants</h3>
        <button class="ajout" ><a href="apprenant_form.php">Ajouter</a></button>
        <table class="table">
            <thead>
                <th>Matricule</th>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Age</th>
                <th>Date de Naissance</th>
                <th>Email</th>
                <th>Téléphone</th>
                <th>Promotion</th>
                <th>Année de certification</th>
                <th>Photo</th>
                <th>Action</th>
            </thead>
            <tbody id="row">
            <?php 
            include 'fonction.php';
            ?>
            <?php foreach ($req as $ligne) : ?>
            <tr>
                <td><?php echo $ligne['matricule']; ?></td>
                <td><?php echo $ligne['nom']; ?></td>
                <td><?php echo $ligne['prenom']; ?></td>
                <td><?php echo $ligne['age']; ?></td>
                <td><?php echo $ligne['datenaiss']; ?></td>
                <td><?php echo $ligne['email']; ?></td>
                <td><?php echo $ligne['telephone']; ?></td>
                <td><?php echo $ligne['promotion']; ?></td>
                <td><?php echo $ligne['anneeCertification']; ?></td>
                <td><img src="<?php echo 'images/'.$ligne['photo']; ?>"  width="50px" height="50px"></td>
                <td>
                    <a class="sup" href="apprenant_liste.php?ids=<?php echo $ligne['matricule']; ?>">Supprimer</a>
                    <a class="mod"  href="modifier.php?idm=<?php echo $ligne['matricule']; ?>">Modifier</a>
                </td>
            </tr>
        <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <script src="script.js/"></script>
</body>
</html>