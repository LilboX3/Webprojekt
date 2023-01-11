<!DOCTYPE html;>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="StyleNav.css">
    <link rel="stylesheet" href="helper.css">
    <title>Buchen Sie jetzt</title>
</head>
<body>
<style>
   .box{
      border-radius: 4%;
      display: block;
      background-color: lightblue;
      padding: 1%;
    }
  </style>
<?php include 'Navbar.php'?>
<div class="container">
    <div class="row">
        <div class= "col" style="margin-top:1%;">
<?php
    

        $price = 0;
        $multiply = 0;
    
        if(isset($_GET["anzahlStd"])){
          $multiply = (int) $_GET["anzahlStd"];
          $price+=140*$multiply;
        }
        if(isset($_GET["anzahlDel"])){
          $multiply = (int)$_GET["anzahlDel"];
          $price+=200*$multiply;
        }
        if(isset($_GET["anzahlEinz"])){
          $multiply = (int)$_GET["anzahlEinz"];
          $price+=120*$multiply;
        }
        if(isset($_GET["anzahlFam"])){
          $multiply = (int)$_GET["anzahlFam"];
          $price+=180*$multiply;
        }
        if(!isset($_SESSION["Preis"])){
        $_SESSION["Preis"] = $price;
        }
        echo "Der Preis beträgt " . $_SESSION["Preis"]."€ pro Nacht.";
        ?>
            </div>
        </div>

        <div class="row box">
            <div class="col">
              <form action="Berechnung.php" method="get">
                <label for="Zimmer">Wählen Sie aus:</label> <br/>
                 mit Frühstück <input type="radio" name="breakfast" value="Ja"> Ja <input type="radio" name="breakfast" value="Nein"> Nein  (+20€/Tag)<br>
                 Anzahl Nächte <input type="number" name="nights" style="width: 2em" min="1" max="365"><br>
                 Datum Anreise <input type="date" name="Anreise"><br>
                 Datum Abreise <input type="date" name="Abreise"><br>
                  <input type="submit" name="Buchen" value="Reservieren">
              </form>
            </div>
          </div>
          <?php 
          if(isset($_GET["breakfast"], $_GET["nights"], $_GET["Anreise"], $_GET["Abreise"], $_SESSION["Preis"])){ //Daten ausgeben, wenn sie alle gesetzt sind!
        
            $wholeprice = $_GET["nights"]*$_SESSION["Preis"];
            if($_GET["breakfast"]=="Ja"){
                $wholeprice += $_GET["nights"]*20;
            }
            
            $datetime1 = date_create($_GET["Anreise"]);
            $datetime2 = date_create($_GET["Abreise"]);

            $dateDiff = date_diff($datetime1, $datetime2); //differenz der beiden Datume

                if($dateDiff->d!=$_GET["nights"]){ //von Object dayDiff mit ->d auf die int days zugreifen 
                    echo "<p class='error'> Das Datum stimmt nicht mit ".$_GET["nights"]." Nächten überein. </p>";
                } else {
                    echo "<p> Ihre Reise wurde gebucht! Überprüfen Sie nochmal Ihre Daten: </p>";
                    echo "<p> Mit Frühstück: ".$_GET["breakfast"]."</p>";
                    echo "<p> Anzahl Nächte: ".$_GET["nights"]."</p>";
                    echo "<p> Anreise am: ".$_GET["Anreise"]." bis zum: ".$_GET["Abreise"]."</p>";
                    echo "<p> Zu einem insgesamten Preis von ".$wholeprice."€.</p>";
                    $_SESSION["Preis"]= NULL;
                }
          } else {
            echo "<p class='error'> Sie müssen alle Felder ausfüllen, um zu reservieren. </p>";
          }
          
          ?>

    </div>
</body>
</html>