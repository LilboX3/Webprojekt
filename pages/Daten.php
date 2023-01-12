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
if(strlen($_POST["2pword"])<8){
    header("Location: Stammdaten.php?pwordshort=true"); //Passwort zu kurz error
}
if(!ctype_alnum($_POST["username"])){
    header("Location: Stammdaten.php?usernamewrong=true"); //Username soll nur Buichstaben und danach Zahlen enthalten
}
if(!filter_var($_POST["mail"], FILTER_VALIDATE_EMAIL)){
    header("Location: Stammdaten.php?mailwrong=true"); //checken ob mail im richtigen format
}
if(!isset($_POST["radios"])){
    header("Location: Stammdaten.php?anrederror=true"); //Radio Buttons nicht ausgefüllt
}
//Validation passt-->ansonsten kommt man zur Seite weiter und hat sich registriert!
?>
<?php

    if(!empty($_POST["radios"])){
        
    }
    if(!empty($_POST["fname"])){
    
    }
    if(!empty($_POST["lname"])){
    
    }
    if(!empty($_POST["mail"])){
    
    }
    if(!empty($_POST["username"])){
    
    }
    if(!empty($_POST["2pword"])){

    }
?>
<div class="container">
    <div class="row">
        <div class="col">
            Sie haben ihre Daten geändert.
        </div>
    </div>
</div>    
</body>
</html>