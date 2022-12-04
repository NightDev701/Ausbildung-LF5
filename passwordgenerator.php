<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Passwort Generator</title>
    <link href="pictures/sunlight.png" rel="icon">
    <link href="css/style.css" rel="stylesheet">
</head>
<body>

<center><b>Passwort Generator</b></center><br><br>

<!-- <form action="formular.php" method="post">
    <input type="number" name="adult" placeholder="Erwachsene"><br>
    <input type="number" name="child" placeholder="Kinder"><br>
    <input type="radio" name="ja" placeholder="ja" value="ja">Ja
    <input type="radio" name="nein" placeholder="nein" checked>Nein<br>
    <button type="submit" name="submit">Berechnen</button><br>
</form> -->
<center>
<?php

$kette = "qwertzuiopasdfghjklyxcvbnm0123456789QWERTZUIO!?*_[]PASDFGHJKLYXCBVNM";
$len = strlen($kette);

$code = "";
for($i = 0;$i < 16;$i++){
    $zufall = rand(0, $len-1);
    $code .= $kette[$zufall];
}

echo $code;


?>
</center>
</body>
</html>
