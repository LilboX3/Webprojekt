<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Stammdatenverwaltung </title>
    <link rel="icon" type="image/png" href="https://icons.iconarchive.com/icons/google/noto-emoji-activities/96/52769-spade-suit-icon.png">
    <link rel="stylesheet" href="webstyle.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="StyleNav.css">
    <link rel="stylesheet" href="helper.css">
</head>
<style>
   .box{
      border-radius: 4%;
      display: block;
      background-color: lightblue;
      padding: 1%;
      text-align: center;
    }
    .box2{
        border-radius: 4%;
      display: block;
      background-color: darkcyan;
      padding: 1%;
      text-align: center;
      margin-bottom:2%;
      margin-top:2%;
    }
    .p{
        border: 2px solid black;
        border-radius: 4px;
        background-color: lightblue;
        margin-top: 1%;
        margin-bottom:0;
    }
  </style>
  <?php include 'Navbar.php'?>
    <?php
    $value = $db_obj->query("SELECT `Name`, `Nachname`, `Username` FROM users WHERE id = '".$_POST["Stammdaten"] ."'");
    $result = mysqli_fetch_assoc($value);
    $cell=(string)$result["Name"]; //einzelne zelle als string holen aus zeile
    $cell2=(string)$result["Nachname"];
    $user=(string)$result["Username"];
    //echo "<p> Sie bearbeiten die Daten von ".$cell." ".$cell2." mit dem Username ".$user.".";
    ?>
<body>
    <div class="container">
        <div class="row">
        <h2 style="text-align:center;">Ändern Sie aktuelle Daten hier:</h2>
            <div class="col"></div>
            <div class="col box" style="border-radius:5px;">

                
                <form action="AdNeueDaten.php" method="post"> <!--Name Eingabefeld-->
                <p style="font-size:smaller;color:green;">Es können auch nur einzelne Daten geändert werden.</p>

                <label for="username">Aktueller User: </label> <br/>
                <input style="width: 300px;" type="text" name="olusername" value="<?php echo $user?>" readonly />
                <br>

                <?php $cell = get_cell("Geschlecht",$user, $db_obj);?>
                <label for="Anrede">Anrede ändern:</label> <br/>
                <input type="radio" name="radios" value="Herr"> Herr <br>
    	        <input type="radio" name="radios" value="Frau"> Frau <br>
                <label for="Anrede" style="font-size:smaller;">Aktuelle Anrede: <?php echo $cell?></label>
                <br>

                

                <?php $cell = get_cell("Name", $user, $db_obj);?>
                <label for="fname">Neuer Vorname:</label> <br/>
                <input style="width: 300px;" type="text" id="fname" name="fname" placeholder="<?php echo $cell?>" pattern="[a-zA-Z]+"/>
                <br>

                <?php $cell = get_cell("Nachname", $user, $db_obj); ?>
                <label for="lname">Neuer Nachname:</label> <br/>
                <input style="width: 300px;" type="text" id="lname" name="lname" placeholder="<?php echo $cell ?>" pattern="[a-zA-Z]+" />
                <br>

                <?php $cell = get_cell("Usermail", $user, $db_obj); ?>
                <label for="mail">Neue E-Mail Adresse:</label> <br/>
                <input style="width: 300px;" type="email" id="mail" name="mail" placeholder="<?php echo $cell?>" />
                <br>
                <?php
                if(isset($_GET["mailwrong"]) && $_GET["mailwrong"]){
                 echo "<p class='error'>Die Mail ist nicht im Format name@mail.com</p>";
                     }
                ?>

                <?php $cell = get_cell("Username", $user, $db_obj); ?>
                <label for="username">Neuer Username:</label> <br/>
                <input style="width: 300px;" type="text" id="username" name="username" placeholder="<?php echo $cell?>" />
                <br>
                <?php if(isset($_GET["usernamewrong"]) && $_GET["usernamewrong"]){
                echo "<p class='error'>Nutzername darf nur Buchstaben und Zahlen enthalten!</p>";
                }
                ?>
        
                <label for="2pword">Neues Passwort:</label> <br/>
                <input style="width: 300px;" type="password" id="2pword" name="2pword" placeholder="Mind. 8 Zeichen" />
                <br>
                <?php 
                if(isset($_GET["pwordshort"]) && $_GET["pwordshort"]){
                echo "<p class='error'> Das Passwort ist zu kurz! Mind. 8 Zeichen. </p>";
                }
                if(isset($_GET["datenerror"]) && $_GET["datenerror"]){
                echo "<p class='error'> Sie haben die falschen Anmeldedaten eingegeben! </p>";
                }
                ?>
            
                <input type="submit" value="Ändern" style="margin-bottom:5%; margin-top:2%;"/>
                
            </div>
            <div class="col"></div>
        </div>
    </div>
</body>
</html>
