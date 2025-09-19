<<<<<<< HEAD
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=t, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $phrase = "On n’est pas le meilleur quand on le croit mais quand on le sait.";
        $str= str_split($phrase);
        $voyelle=['a','e','i','u','o','y','A','E','I','U','O','U','Y'];
        $cons="bcdfghjklmnpqrstvwxzBCDFGHJKLMNPQRSTVWXZ";
        $consonne= str_split($cons);
    

        $dic = [
            "voyelle" => 0,
            "consonne" => 0
        ];

        foreach ($str as $caractere) {
            if (in_array($caractere, $voyelle)) {
               $dic["voyelle"]++;
            }elseif (in_array( $caractere, $consonne)) {
                 $dic["consonne"]++;
            }
        }

 ?>

    <table>
        <thead>
            <th>Voyelles</th>
            <th>Consonnes</th>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $dic["voyelle"]; ?></td>
                <td><?php echo $dic["consonne"]; ?></td>
            </tr>
        </tbody>
    </table>
</body>
=======
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=t, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $phrase = "On n’est pas le meilleur quand on le croit mais quand on le sait.";
        $str= str_split($phrase);
        $voyelle=['a','e','i','u','o','y','A','E','I','U','O','U','Y'];
        $cons="bcdfghjklmnpqrstvwxzBCDFGHJKLMNPQRSTVWXZ";
        $consonne= str_split($cons);
    

        $dic = [
            "voyelle" => 0,
            "consonne" => 0
        ];

        foreach ($str as $caractere) {
            if (in_array($caractere, $voyelle)) {
               $dic["voyelle"]++;
            }elseif (in_array( $caractere, $consonne)) {
                 $dic["consonne"]++;
            }
        }

 ?>

    <table>
        <thead>
            <th>Voyelles</th>
            <th>Consonnes</th>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $dic["voyelle"]; ?></td>
                <td><?php echo $dic["consonne"]; ?></td>
            </tr>
        </tbody>
    </table>
</body>
>>>>>>> 01877f106f98795d5da5aecaeb74593a191ac7e1
</html>