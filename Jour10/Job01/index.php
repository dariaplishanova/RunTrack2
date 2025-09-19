
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
                <th>Id</th>
                <th>Prenom</th>
                <th>Nom</th>
                <th>Naissance</th>
                <th>Sexe</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
        <?php
        require_once('../bdd.php');
        $resultat = $bdd->query("SELECT * FROM `étudiants`");
        $tab = $resultat->fetchAll(PDO::FETCH_OBJ);
        foreach ($tab as $tableau) {
            echo "<tr>";
            echo "<td>{$tableau->id}</td>";
            echo "<td>{$tableau->prenom}</td>";
            echo "<td>{$tableau->nom}</td>";
            echo "<td>{$tableau->naissance}</td>";
            echo "<td>{$tableau->sexe}</td>";
            echo "<td>{$tableau->email}</td>";
            echo "</tr>";
        }
        ?>
        </tbody>
    </table>
</body>
</html>
