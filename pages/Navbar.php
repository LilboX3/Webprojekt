<?php require_once "dbaccess.php"; 
session_start();?>
<?php 
 function get_cell($column, $username, $db_obj) //funktion in jeder file einsetzbar!
  {
    $value = $db_obj->query("SELECT `".$column."` FROM users WHERE username = '".$username ."'");
     $result = mysqli_fetch_assoc($value);
     $cell=(string)$result["".$column.""]; //einzelne zelle als string holen aus zeile
    return $cell;
      }

  function bool_toString($bool){ //zu Ja oder Nein konvertieren
        if($bool==1){
            return "Ja";
        }
        return "Nein";
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
<nav>
      <div class="navbar">
        <div class="container nav-container">
            <input class="checkbox" type="checkbox" name="" id="" />
            <div class="hamburger-lines">
              <span class="line line1"></span>
              <span class="line line2"></span>
              <span class="line line3"></span>
            </div>  
          <div class="col" style="text-align:center">
            <?php if(isset($_SESSION["loggedIn"])&&$_SESSION["loggedIn"]){
              echo "<p>Eingeloggt als ".$_SESSION["username"]." - ".$_SESSION["status"]."</p>";
            } else {
              echo "<p>Sie sind anonym</p>";
            } ?>
          </div>
          <div class="logo">
            <h1 onclick="window.location.href='Homepage.php';"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-suit-spade-fill" viewBox="0 0 16 16">
            <path d="M7.184 11.246A3.5 3.5 0 0 1 1 9c0-1.602 1.14-2.633 2.66-4.008C4.986 3.792 6.602 2.33 8 0c1.398 2.33 3.014 3.792 4.34 4.992C13.86 6.367 15 7.398 15 9a3.5 3.5 0 0 1-6.184 2.246 19.92 19.92 0 0 0 1.582 2.907c.231.35-.02.847-.438.847H6.04c-.419 0-.67-.497-.438-.847a19.919 19.919 0 0 0 1.582-2.907z"/>
            </svg> Hotel Des N??tes</h1>
          </div>
          <div class="menu-items">
            <?php if(isset($_SESSION["admin"])&&$_SESSION["admin"]){?>
            <li><a href="AdCtrlPanel.php">Control Panel</a></li>
            <?php } ?>

            <li><a href="Homepage.php">Home</a></li>
            <li><a href="FAQ.php">FAQ</a></li>
            <li><a href="Galerie.php">Galerie</a></li>
            <li><a href="News.php">News</a></li>
            <li><a href="Impressum.php">Impressum</a></li>
            <li><a href="Registrierung.php">Registrierung</a></li>

            <?php
            if(isset($_SESSION["loggedIn"])&&$_SESSION["loggedIn"]){ ?>
            <li><a href="Reserviert.php">Meine Reservierungen</a></li>
            <li><a href="Reservierung.php">Neue Reservierung</a></li>
            <li><a href="Logout.php">Ausloggen</a></li>
            <li><a href="Stammdaten.php">Stammdaten ??ndern</a></li>
            <?php } else {?>
              <li><a href="Login.php">Anmelden</a></li>
            <?php } ?>
             
            
            
            
          </div>
        </div>
      </div>
    </nav>

    <?php

  /*$sql = "SELECT * FROM users"; //hole mir EINEN datensatz
  $result = $db_obj->query($sql); //Alle user der datenbank ausgeben!
  //echo "<pre>" . print_r($result->fetch_assoc(), true) . "</pre>"; //mit fetch array objekte als array ausgeben

  while(($row = $result->fetch_assoc()) !== null){ //ALLE user ausgeben, durchiterieren
   echo "<pre> Result Array:\n";
   print_r($row); //??ber fetch_objekt: objekt kann nicht iteriert werden.
   echo "</pre>";
    
  }
  //wenn fetch assoc nix zur??ckgibt: user existiert nicht in datenbank--> LOGIN (fetch array braucht man nd)
  

  
  */
    ?>

</body>
</html>