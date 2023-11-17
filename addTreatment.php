<?php
require_once './connexion.php';
if(isset($_POST['nom'])&& isset($_POST['prenom'])){
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $check = $bdd->prepare("SELECT nom, prenom FROM employe");
    $data = $check->fetch();
    $row = $check->rowCount();
    $insert = $bdd->prepare("INSERT INTO employe(nom, prenom) VALUES (?, ?)");
    $insert->execute(array(
    $nom,
    $prenom,                                       
  ));
    header('location:index.php');
}

?>