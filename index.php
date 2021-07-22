<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>01-paskaita PHP</title>
    </head>
<body>
    <?php
    $skaicius = 5;
    $tekstas = "Labas";
    $sk = 5.5;
    $tiesa = true;
    $melas = false;

    echo $skaicius;   
    echo $tekstas;
    echo $sk;
    echo $tiesa; //nebus atvaizduota
    echo $melas; //nebus atvaizduota
    echo $skaicius. " ". $tekstas. " ". $sk;
    echo $skaicius. "<br> ". $tekstas. "<br> ". $sk;
    echo "<br>";


    echo "Labas, sitas tekstas parasytas PHP pagalba";
    echo "Kitas tekstas parasytas PHP pagalba";

    ?>

    <p> Labas, sis dokumentas ya lokaliame serveryje</p>
</body>
</html>