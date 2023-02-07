<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Kinopreise</title>
    <link href="pictures/sunlight.png" rel="icon">
    <link href="css/style.css" rel="stylesheet">
</head>
<body>

<b>Tickets</b><br><br>

<form action="formular.php" method="post">
<input type="number" name="adult" placeholder="Erwachsene"><br>
<input type="number" name="child" placeholder="Kinder"><br>

Familienkarte <input type="radio" name="family" value="ja">Ja
<input type="radio" name="family" value="nein" checked>Nein<br>

2D oder 3D Filme <input type="radio" name="dim" value="2d" checked>Ja
<input type="radio" name="dim" value="3d">Nein<br>

<button type="submit" name="submit">Berechnen</button><br>
</form>

<?php

$costAdult = 11;
$costChild = 8;

$adult = $_POST["adult"] ?? 0;
$child = $_POST["child"] ?? 0;

$cards = $adult+$child;

if($adult == null){
    $adult = 0;
}
if($child == null){
    $child = 0;
}

$finalAdult = $costAdult * $adult;
$finalChild = $costChild * $child;
$finalCost = $finalChild + $finalAdult;

if($finalCost < 0 || $finalAdult < 0 || $finalChild < 0){
    echo "Fehler bei der Eingabe!<br>";
    return;
}

print "Erwachsene: $adult | $finalAdult € <br>";
print "Kinder: $child | $finalChild € <br>";
print "Gesamtpreis: $finalCost € <br>";

if(isset($_POST["family"])){
    if($_POST["family"] == "ja"){
        $finalCost = $finalCost - ($finalCost*0.1);
        print "Rabatt durch Familienkarte: $finalCost € <br>";
    }
}
if(isset($_POST["dim"])){
    if($_POST["dim"] == "2d" && $cards >= 5){
        $finalCost = $finalCost - ($finalCost*0.1);
        print "Rabatt durch 2D Film und 5 oder mehr Personen: $finalCost € <br>";
    }
}

unset($adult);
unset($child);

?>

</body>
</html>
