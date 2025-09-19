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
                <th>Nom</th>
                <th>Id_etage</th>
                <th>Capacite</th>

        </thead>
        <tbody>
        <?php
        require_once('../bdd.php');
        $resultat = $bdd->query("SELECT * FROM salles ORDER BY capacite DESC;`;");
        $tab = $resultat->fetchAll(PDO::FETCH_OBJ);
        foreach ($tab as $tableau) {
            echo "<tr>";
            echo "<td>{$tableau->id}</td>";
            echo "<td>{$tableau->nom}</td>";
            echo "<td>{$tableau->id_etage}</td>";
            echo "<td>{$tableau->capacite}</td>";
            echo "</tr>";
        }
        ?>
        </tbody>
    </table>
</body>
</html>