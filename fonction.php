

<?php 
include('connectDb.php');
$req= $bdd->prepare('select * from apprenant');
$req->execute();
?>
<?php
include('connectDb.php');
if(isset($_GET['ids'])){
    $bdd->query('delete from apprenant where matricule='.$_GET['ids']);
    header('Location:apprenant_liste.php');
}
?>

<?php 
include('connectDb.php');
function genererChaineAleatoire($longueur) {
    $caracteres = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $matricule = '';
    $maxIndex = strlen($caracteres) - 1;

    for ($i = 0; $i < $longueur; $i++) {
        $matricule .= $caracteres[random_int(0, $maxIndex)];
    }

    return $matricule;
}


// apprenant
if(isset($_POST['valider'])){
    $promotion = $_POST['promotion'];
    $matricule = $promotion.genererChaineAleatoire(4);
   $photo=$matricule.".".strtolower(pathinfo($_FILES['photo']['name'],PATHINFO_EXTENSION));
$req=$bdd->prepare('insert into apprenant(matricule,nom,prenom,age,datenaiss,email,telephone,photo,promotion,anneeCertification) values(?,?,?,?,?,?,?,?,?,?)');

   $req->bindValue(1,$matricule);
    $req->bindValue(2,$_POST['nom']);
    $req->bindValue(3,$_POST['prenom']);
    $req->bindValue(4,$_POST['age']);
    $req->bindValue(5,$_POST['datenaiss']);
    $req->bindValue(6,$_POST['email']);
    $req->bindValue(7,$_POST['telephone']);
    $req->bindValue(8,$photo);
    $req->bindValue(9,$_POST['promotion']);
    $req->bindValue(10,$_POST['anneeCertification']);
    $req->execute();

    move_uploaded_file($_FILES['photo']['tmp_name'],"images/".$photo);
    //redirection
    header('Location:apprenant_liste.php');
    
}


?>
