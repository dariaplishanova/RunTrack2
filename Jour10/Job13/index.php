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
                <th>Nom</th>
                <th>Nom2</th>
            </tr>
        </thead>
        <tbody>
        <?php
        require_once('../bdd.php');
        $resultat = $bdd->query("SELECT salles.nom as nom, etage.nom AS nom2
    FROM salles
        INNER JOIN etage ON salles.id_etage = etage.id;
");
        $tab = $resultat->fetchAll(PDO::FETCH_OBJ);
        foreach ($tab as $tableau) {
            echo "<tr>";
            echo "<td>{$tableau->nom}</td>";
            echo "<td>{$tableau->nom2}</td>";
            echo "</tr>";
        }
        ?>
        </tbody>
    </table>
</body>
</html>
