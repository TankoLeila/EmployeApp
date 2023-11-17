<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Employe</title>
    <link rel="stylesheet" href="./style.css">
</head>

<body>

    <div class="form">
        <a href="index.php" class="back_btn"><img src="./images/back.png"> Retour</a>
        <h2>Ajouter un employé</h2>
        <form action="addTreatment.php" method="POST">
            <label>Nom</label>
            <input type="text" name="nom">
            <label>Prénom</label>
            <input type="text" name="prenom">
            <label>Departement</label>
            <select name="" id="">
                <option value=""></option>
            </select>
            <input type="submit" value="Ajouter" name="button">
        </form>
    </div>
</body>

</html>