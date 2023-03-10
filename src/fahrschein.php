<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Fahrschein</title>
    <link href="../pictures/sunlight.png" rel="icon">
    <link href="../css/style.css" rel="stylesheet">
</head>
<body>

<b>Tickets</b><br><br>

<form action="fahrschein.php" method="post">
    Km <input type="number" name="km" placeholder="Kilometer"><br>
    Fahrkarte
    <input type="radio" name="human" value="normal" checked>Erwachsen
    <input type="radio" name="human" value="school">Schüler
    <input type="radio" name="human" value="child">Kind<br>

    <button type="submit" name="submit">Berechnen</button><br><br>
</form>

<?php

if(isset($_POST["km"])){
    $distance = $_POST["km"];

    if($distance > 0){
        echo "Distance: $distance km<br>";

        $price = number_format($distance * 0.28, 2, ',');

        if($_POST["human"] == "child" || $_POST["human"] == "school"){
            $child_price = number_format($price - ($price * 0.3), 2, ',');
            echo "Price: $child_price €<br>";
        }  else {
            echo "Price: $price €<br>";
        }

    } else {
        echo "Ungültige Eingabe!<br>";
    }

}

?>

</body>
</html>
