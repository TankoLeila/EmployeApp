<?php
include ('./connexion.php');
    //recuperation de l'id
    $id_employe = $_GET["id"];
    //preparation de la requete de selection
    $req =  "SELECT nom, prenom FROM employe WHERE id = $id_employe";
    //execution de la requete
    $res = $bdd -> query($req);
    //stocker le resultat dans la variable data
    $data = $res -> fetch();
    if(isset($_POST["btn"])
            ){
                $nom = $_POST["nom"];
                $prenom = $_POST["prenom"];

                $statement = $bdd -> prepare("UPDATE employe SET nom='$nom', prenom='$prenom' WHERE id= $id_employe");
                $resultat = $statement -> execute();
                header('location:index.php');  
            }
            
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit a employe's information</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="form">
        <a href="index.php" class="back_btn"><img src="./images/back.png"> Retour</a>
        <form method="post">
        <h2>Modifier l'employé : <?php echo  $data["nom"]; ?></h2>
            <label>Nom</label>
            <input type="text" name="nom" value="<?php echo  $data["nom"]; ?>">
            <label>Prénom</label>
            <input type="text" name="prenom" value="<?php echo  $data["prenom"]; ?>">
            <label>Departement</label>
            <input type="text" name="departement" value="info">
            <input type="submit" name="btn" value="Modifier" >
        </form>
    </div>
</body>
</html>
