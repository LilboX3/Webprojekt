<?php
$host ="localhost";
$user = "webtechgoat";
$password = "W1a2p3p4l5e6r7"; //User und passwort muss richtig sein!
$database = "bif1webtechdb";

$db_obj = new mysqli($host, $user, $password, $database); //-> auf eigenschaften des objekts zugreifen

if ($db_obj->connect_error) { //wenn conn error vom objekt true ist
    echo "<p style='text-align:center;color:red;'>Connection Error: " . $db_obj->connect_error."</p>";
    exit();
    } else {
        echo "<p style='text-align:center;color:green;'>Connection successful</p>";
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>