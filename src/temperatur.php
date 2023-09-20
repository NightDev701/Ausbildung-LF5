<!doctype html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Temperatur</title>
</head>
<body>

<?php

$temp = array(27, 18, 12, 13, 15, 20, 25);
$total = count($temp);
$count = 0;

for ($i = 0; $i < $total; $i++){
    echo "Temperatur Tag ". ($i+1) . ": $temp[$i] Grad<br>";
    $count = $count + $temp[$i];
}

echo "<br>";
echo "Mindest Temperatur: ". minValue($temp)."<br>";
echo "Maximal Temperatur: ". maxValue($temp)."<br>";
echo "Durchschnittstemperatur: ". number_format(($count / $total), 2, ".") ."<br>";

function minValue($array){
    if (empty($array)) {
        return null;
    }

    $kleinsterWert = $array[0];

    foreach ($array as $wert) {
        if ($wert < $kleinsterWert) {
            $kleinsterWert = $wert;
        }
    }
    return $kleinsterWert;
}

function maxValue($array){
    if (empty($array)) {
        return null;
    }

    $kleinsterWert = $array[0];

    foreach ($array as $wert) {
        if ($wert > $kleinsterWert) {
            $kleinsterWert = $wert;
        }
    }
    return $kleinsterWert;
}

?>

</body>
</html>