<?php
require_once './connexion.php';
    //recuperation de l'id
    $id_employe = $_GET["id"];
    //preparation de la requete de selection
    $req =  "SELECT nom, prenom FROM employe WHERE id = $id_employe";
    //execution de la requete
    $res = $bdd -> query($req);
    //stocker le resultat dans la variable data
    $data = $res->fetch();
    if( isset($_POST["id_employe"])&&
                isset($_POST["btn_mod"])
            ){
                $nom = $_POST["nom"];
                $prenom = $_POST["prenom"];

                $statement = $pdo -> prepare("UPDATE employe SET nom=$nom, prenom=$prenom WHERE id=$id_realisation");
                $resu = $statement -> execute();
                header('location:index.php');
            }
?>