<!doctype html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Quatalumsätze</title>
    <link href="pictures/sunlight.png" rel="icon">
    <link href="css/style.css" rel="stylesheet">
</head>
<body>

<?php

$umsaetze = array(12000, 14000, 10000, 15000);

for ($i = 0; $i < count($umsaetze); $i++) {
    echo "Quatal " . ($i + 1) . ": " . $umsaetze[$i] . "€<br>";
}

echo "Das niedrigste Einkommen beträgt " . min($umsaetze) . "€<br>";
echo "Das höchste Einkommen beträgt " . max($umsaetze) . "€<br>";

?>

</body>
</html>