<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="StyleNav.css">
    <title>Daten ändern</title>
<link rel="icon" type="image/png" href="https://icons.iconarchive.com/icons/google/noto-emoji-activities/96/52769-spade-suit-icon.png">
</head>
<style>
   .box{
      border-radius: 4%;
      display: block;
      background-color: lightblue;
      padding: 1%;
      text-align: center;
    }
  </style>
  <?php include 'Navbar.php'?>
<body>
<?php 
if(!empty($_POST["2pword"])&&strlen($_POST["2pword"])<8){
    header("Location: Stammdaten.php?pwordshort=true"); //Passwort zu kurz error
}
if(!empty($_POST["username"])&&!ctype_alnum($_POST["username"])){
    header("Location: Stammdaten.php?usernamewrong=true"); //Username soll nur Buchstaben und danach Zahlen enthalten
}
if(!empty($_POST["mail"])&&!filter_var($_POST["mail"], FILTER_VALIDATE_EMAIL)){
    header("Location: Stammdaten.php?mailwrong=true"); //checken ob mail im richtigen format
}

//Validation passt-->ansonsten kommt man zur Seite weiter und hat sich registriert!
?>
<?php
    function check_user($username, $password, $db_obj) //checken, ob richtige Anmeldedaten zum ändern
    {
        $hashed = $db_obj->query("SELECT `password` FROM users WHERE username = '".$username ."'");
        $result = mysqli_fetch_assoc($hashed);
        $cell=(string)$result["password"]; //einzelne zelle als string holen aus zeile

        if(password_verify($password, $cell)){ //passwort überprüfen
        $result = $db_obj->query("SELECT * FROM users WHERE username = '".$username ."'"); //gesuchte zeile
        if(($row = $result->fetch_assoc())!== null){
            return true;
        }
    }
        return false;

    }

    function add_db($column, $value, $db_obj, $user){ //Wert in datenbank ändern
        $sql = "UPDATE users 
                SET ".$column." = '".$value."'
                WHERE username = '".$user."'";
        $result = $db_obj->query($sql);
    }

if(check_user($_POST["olusername"], $_POST["pword"], $db_obj)){
   if(!empty($_POST["radios"])){
        add_db("Geschlecht", $_POST["radios"], $db_obj, $_POST["olusername"]);
    }
    if(!empty($_POST["fname"])){
        add_db("Name", $_POST["fname"], $db_obj, $_POST["olusername"]);
    }
    if(!empty($_POST["lname"])){
        add_db("Nachname", $_POST["lname"], $db_obj, $_POST["olusername"]);
    }
    if(!empty($_POST["mail"])){
        add_db("Usermail", $_POST["mail"], $db_obj, $_POST["olusername"]);
    }
    if(!empty($_POST["2pword"])){
        add_db("Password", password_hash($_POST["2pword"], PASSWORD_DEFAULT), $db_obj, $_POST["olusername"]);
    }
    if(!empty($_POST["username"])){
        $_SESSION["username"] = $_POST["username"];
        add_db("Username", $_POST["username"], $db_obj, $_POST["olusername"]);
    }
} else {
    header("Location: Stammdaten.php?datenerror=true");
}
?>
<div class="container">
    <div class="row">
        <div class="col">
            Sie haben ihre Daten geändert und werden jetzt ausgeloggt.
            
        </div>
    </div>
</div>    
</body>
</html>