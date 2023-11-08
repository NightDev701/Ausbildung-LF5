<!doctype html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <link href="pictures/sunlight.png" rel="icon">
    <link href="css/style.css" rel="stylesheet">
    <title>Datenbank</title>
</head>
<body>

<?php

$db = new mysqli("95.216.192.53", "schule", "SteBae!040123*", "schule");

if($db->connect_error){
    die("Connection failed: " . $db->connect_error);
}

echo "Verbindung zur Datenbank erfolgreich!";


?>

</body>
</html>