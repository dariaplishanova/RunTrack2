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
                <th>Superficie total</th>

        </thead>
        <tbody>
        <?php
        require_once('../bdd.php');
        $resultat = $bdd->query("SELECT SUM(superficie) AS superficie_totale FROM `etage`;");
        $tab = $resultat->fetchAll(PDO::FETCH_OBJ);
        foreach ($tab as $tableau) {
            echo "<tr>";
            echo "<td>{$tableau->superficie_totale}</td>";
            echo "</tr>";
        }
        ?>
        </tbody>
    </table>
</body>
</html>