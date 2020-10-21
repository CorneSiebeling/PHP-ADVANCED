<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        function rekenUit($getal1, $getal2, $getal3){
            $antwoord = $getal1 + $getal2 + $getal3;
            echo "als ik $getal1 $getal2 en $getal3 bij elkaar optel is het $antwoord";
            return $antwoord;
    }

        rekenUit(6,12,3)
        rekenUit(6,4,11)
        rekenUit(4,2,9)



    ?>
</body>
</html>