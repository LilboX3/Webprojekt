<?php 
if($_POST["pword"]!=$_POST["2pword"]){
    header("Location: Registrierung.php?pwordwrong=true");//password nicht gleich error
}
else if(strlen($_POST["pword"])<8){
    header("Location: Registrierung.php?pwordshort=true"); //Passwort zu kurz error
}
else if(!ctype_alnum($_POST["username"])){
    header("Location: Registrierung.php?usernamewrong=true"); //Username soll nur Buichstaben und danach Zahlen enthalten
}
else if(!filter_var($_POST["mail"], FILTER_VALIDATE_EMAIL)){
    header("Location: Registrierung.php?mailwrong=true"); //checken ob mail im richtigen format
}
else if(!isset($_POST["radios"])){
    header("Location: Registrierung.php?anrederror=true"); //Radio Buttons nicht ausgefüllt
} else {



//Validation passt-->ansonsten kommt man zur Seite weiter und hat sich registriert!
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="StyleNav.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Sie sind jetzt eingeloggt</title>
<link rel="icon" type="image/png" href="https://icons.iconarchive.com/icons/google/noto-emoji-activities/96/52769-spade-suit-icon.png">
</head>
<body>
    <?php
    include 'Navbar.php';
    ?>
    <div class="container">
        <div class="row">
            <div class="col">
                <h1> Willkommen in der Des Nâtes Familie! </h1>
                <h4><a href="Login.php">Melden Sie sich jetzt an!</a> Sie sind mit folgenden Daten registriert:</h4>
                <?php
                $user = $_POST["username"];
                $result = $db_obj->query("SELECT * FROM users WHERE username = '".$user."'");
                if($result->num_rows != 0) { //username existiert bereits!
                    header("Location: Registrierung.php?usernameexists=true");
                } else {

                echo "<p> Willkommen ".$_POST["radios"]." ".$_POST["fname"]. " ".$_POST["lname"]. "!</p>";
                echo "<p> Ihre Mail: ".$_POST["mail"]."</p>";
                echo "<p> Ihr Username: ".$_POST["username"];
                echo "<p> Ihr Passwort ist ".strlen($_POST["pword"])." Zeichen lang. </p>";

                if(strlen($_POST["textarea"])>0){ //in der Textbox steht eine Nachricht
                echo "<p> Ihre Nachricht an uns lautet:</p>";
                echo $_POST["textarea"];}
                else {
                echo "<p> Keine persönliche Nachricht hinzugefügt.";
                }
                /* Werte in Datenbank einfügen! */
                $username = $_POST["username"];
                $hashed = password_hash($_POST["pword"], PASSWORD_DEFAULT);
                $mail = $_POST["mail"];
                $name = $_POST["fname"];
                $lastname = $_POST["lname"];
                $gender = $_POST["radios"];

                    $sql = "INSERT INTO `users` (`username`, `password`, `usermail`, `name`, `nachname`, `geschlecht`)
                    VALUES ('$username', '$hashed', '$mail', '$name', '$lastname', '$gender');";
                    $result = $db_obj->query($sql);
            }
        }
                


                ?>
            
            </div>
        </div>
    </div>
</body>
</html>