<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Wasserbedarf</title>
    <link href="../pictures/sunlight.png" rel="icon">
    <link href="../css/style.css" rel="stylesheet">
</head>
<body>

<b>Wasserbedarf</b><br><br>

Geben Sie ihr Gewicht in KG an: <br><br>
<form action="wasserbedarf.php" method="post">
    <input type="number" name="gewicht" step="0.01" id="totalAmt"><br>
    <button type="submit" name="submit">Berechnen</button><br><br>
</form>

<?php
    $weight = $_POST["gewicht"];

    if($weight <= 0){
        echo "Du kannst keine Negativwerte angeben!<br>";
        exit();
    }

    $value = number_format($weight * 0.03, 2, '.');

    echo "Dein Wasserbedarf beträgt {$value} Liter am Tag! <br>";
?>

</body>
</html>