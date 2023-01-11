
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrierung</title>
    <link rel="stylesheet" href="webstyle.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="StyleNav.css">
    <link rel="stylesheet" href="helper.css">
</head>
<!-- a. Erstellen Sie ein Registrierungsformular - bei der Registrierung
sind (zumindest) folgende Daten anzugeben:
i. Anrede
ii. Vorname
iii. Nachname
iv. E-Mail-Adresse
v. Username
vi. Passwort (muss 2x eingegeben werden)
b. Überprüfen Sie alle eingegebenen Daten clientseitig (mit
speziellen HTML5 Tags voreinschränken).-->

<body>
   <?php include 'Navbar.php'?>
  <h2>Registrieren Sie sich jetzt!</h2>
      <br>
      <div class="box" style="border-radius:5px;">
      <p> <form action="RegErfolgt.php" method="post"> <!--Name Eingabefeld-->
        <label for="Anrede">Anrede:</label> <br/>
        <input type="radio" name="radios" value="Herr"> Herr <br>
    	  <input type="radio" name="radios" value="Frau"> Frau
        <br>
        <?php
        if(isset($_GET["anrederror"])&& $_GET["anrederror"]){
            echo "<p class='error'>Bitte wählen sie eine Anrede aus.</p>";
        }    
          ?>
        <label for="fname">Vorname:</label> <br/>
        <input style="width: 300px;" type="text" id="fname" name="fname" placeholder="Max" pattern="[a-zA-Z]+" required/>
        <br>
        <label for="lname">Nachname:</label> <br/>
        <input style="width: 300px;" type="text" id="lname" name="lname" placeholder="Mustermann" pattern="[a-zA-Z]+" required/>
        <br>
        <label for="mail">E-Mail Adresse:</label> <br/>
        <input style="width: 300px;" type="email" id="mail" name="mail" placeholder="maxmustermann@gmail.com" required/>
        <br>
        <?php
        if(isset($_GET["mailwrong"]) && $_GET["mailwrong"]){
            echo "<p class='error'>Die Mail ist nicht im Format name@mail.com</p>";
        }
        ?>
        <label for="username">Ihr Username:</label> <br/>
        <input style="width: 300px;" type="text" id="username" name="username" placeholder="max101" required/>
        <br>
        <?php if(isset($_GET["usernamewrong"]) && $_GET["usernamewrong"]){
          echo "<p class='error'>Nutzername darf nur Buchstaben und Zahlen enthalten!</p>";
        }
        ?>
        <label for="pword">Ihr Passwort:</label> <br/>
        <input style="width: 300px;" type="password" id="pword" name="pword" placeholder="mind. 8 Zeichen" required/>
        <br>
        <?php 
        if(isset($_GET["pwordshort"]) && $_GET["pwordshort"]){
          echo "<p class='error'> Das Passwort ist zu kurz! Mind. 8 Zeichen. </p>";
        }
        ?>
        <label for="2pword">Wiederholen Sie Ihr Passwort:</label> <br/>
        <input style="width: 300px;" type="password" id="2pword" name="2pword" placeholder="mind. 8 Zeichen" required/>
        <br>
        <?php 
        if(isset($_GET["pwordwrong"]) && $_GET["pwordwrong"]){
          echo "<p class='error'> Die Passwörter müssen gleich sein! </p>";
        }
        ?>
        <label for="message">Ihre Nachricht an uns:</label> <br/>
        <textarea name="textarea" rows="10" cols="39" placeholder="Ihre Nachricht"></textarea>
        <br>
        <input type="submit"/>
        </form></p>
      </div>
        

    
</body>
</html>