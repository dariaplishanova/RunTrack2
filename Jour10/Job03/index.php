<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1" cellpadding="5">
        <thead>
            <tr>
                <th>Prenom</th>
                <th>Nom</th>
                <th>Naissance</th>
            </tr>

        </thead>
        <tbody>
        <?php
        require_once('../bdd.php');
        $resultat = $bdd->query("SELECT prenom, nom, naissance FROM `étudiants` WHERE sexe = 'Femme' ");
        $tab = $resultat->fetchAll(PDO::FETCH_OBJ);
        foreach ($tab as $tableau) {
            echo "<tr>";
            echo "<td>{$tableau->prenom}</td>";
            echo "<td>{$tableau->nom}</td>";
            echo "<td>{$tableau->naissance}</td>";
            echo "</tr>";
        }
        ?>
        </tbody>
    </table>
</body>
</html>
