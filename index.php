<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
    <a href="AddEmploye.php" class="Btn_add"> <img src="./images/plus.png"> Ajouter</a>

    <table>
    <thead>
        <tr id="items">
            <th>Nom</th>
            <th>Prénom</th>
            <!-- <th>Departement</th> -->
            <th>Modifier</th>
            <th>Supprimer</th>
        </tr>
        <tbody>
            <?php
                include "connexion.php";
                $req_listclient="SELECT `id`, `nom`, `prenom` FROM `employe`";
                //execution de la requete
                $res=$bdd->query($req_listclient);
                while($row=$res->fetch()){ 
            echo "<tr>
                <td> ". $row["nom"] ."  </td>
                <td> ". $row["prenom"] ."</td>
                <td> <a href=\"edit.php?id=" .$row["id"] ."; \" class=\"Btn_edit\"> <img src=\"./images/pen.png\"></a></td>
                <td> <a href=\"AddEmploye.\" class=`\"Btn_del\"> <img src=\"./images/trash.png\"></a></td>
            </tr>";
          
                }
            ?>
        </tbody>
    </table>
</body>

</html>