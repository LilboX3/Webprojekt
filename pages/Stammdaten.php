<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="StyleNav.css">
    <link rel="stylesheet" href="helper.css">
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
    <div class="container">
        <div class="row">
        <h1 style="text-align:center;">Ändern Sie Ihre Daten hier:</h1>
            <div class="col"></div>
            <div class="col box" style="border-radius:5px;">

            
                <form action="Daten.php" method="post"> <!--Name Eingabefeld-->
                <p style="font-size:smaller;color:green;">Sie müssen nicht alle Felder ausfüllen.</p>
                <label for="Anrede">Anrede ändern:</label> <br/>
                <input type="radio" name="radios" value="Herr"> Herr <br>
    	        <input type="radio" name="radios" value="Frau"> Frau
                <br>
                <label for="fname">Neuer Vorname:</label> <br/>
                <input style="width: 300px;" type="text" id="fname" name="fname" placeholder="Max" pattern="[a-zA-Z]+"/>
                <br>
                <label for="lname">Neuer Nachname:</label> <br/>
                <input style="width: 300px;" type="text" id="lname" name="lname" placeholder="Mustermann" pattern="[a-zA-Z]+" />
                <br>
                <label for="mail">Neue E-Mail Adresse:</label> <br/>
                <input style="width: 300px;" type="email" id="mail" name="mail" placeholder="maxmustermann@gmail.com" />
                <br>
                <?php
                if(isset($_GET["mailwrong"]) && $_GET["mailwrong"]){
                 echo "<p class='error'>Die Mail ist nicht im Format name@mail.com</p>";
                     }
                ?>
                <label for="username">Alter Username(benötigt):</label> <br/>
                <input style="width: 300px;" type="text" id="olusername" name="olusername" placeholder="max101" />
                <br>
                <label for="username">Neuer Username:</label> <br/>
                <input style="width: 300px;" type="text" id="username" name="username" placeholder="max101" />
                <br>
                <?php if(isset($_GET["usernamewrong"]) && $_GET["usernamewrong"]){
                echo "<p class='error'>Nutzername darf nur Buchstaben und Zahlen enthalten!</p>";
                }
                ?>
                <label for="pword">Ihr Passwort (benötigt):</label> <br/>
                <input style="width: 300px;" type="password" id="pword" name="pword" placeholder="mind. 8 Zeichen" required/>
                <br>
                <label for="2pword">Neues Passwort:</label> <br/>
                <input style="width: 300px;" type="password" id="2pword" name="2pword" placeholder="mind. 8 Zeichen" />
                <br>
                <?php 
                if(isset($_GET["pwordshort"]) && $_GET["pwordshort"]){
                echo "<p class='error'> Das Passwort ist zu kurz! Mind. 8 Zeichen. </p>";
                }
                if(isset($_GET["datenerror"]) && $_GET["datenerror"]){
                echo "<p class='error'> Sie haben die falschen Anmeldedaten eingegeben! </p>";
                }
                ?>
            
                <input type="submit" style="margin-bottom:5%; margin-top:2%;"/>
                
            </div>
            <div class="col"></div>
        </div>
    </div>
</body>
</html>