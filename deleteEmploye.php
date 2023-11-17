<?php
  //connexion a la base de données
  include_once "connexion.php";
  //récupération de l'id dans le lien
  $emp_id= $_GET['emp_id'];
  //requête de suppression
  $req = mysqli_query($con , "DELETE FROM employe WHERE emp_id = $emp_id");
  //redirection vers la page index.php
  header("Location:index.php")
?>