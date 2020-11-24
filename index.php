<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP4 exo3</title>
</head>
<body>
    <?php
    function test($num1, $num2) {
        if($num1 < $num2) {
            return 'Le premier nombre est plus petit';
    }
        else if($num1 > $num2) {
            return 'Le premier nombre est plus grand';
        }
        else if($num1 == $num2) {
            return 'Les deux nombres sont identique';
        }
    }
        $resultat = test(11, 11);
        echo $resultat
    ?>
</body>
</html>