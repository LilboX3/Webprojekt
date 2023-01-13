<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Neue Registrierungen </title>
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
  </style>
<body>
    <div class="container">
        <div class="row">
    <?php include 'Navbar.php';
    function update($column, $value, $db_obj, $id){ //Wert in datenbank ändern
        $sql = "UPDATE Reservierungen 
                SET ".$column." = '".$value."'
                WHERE ZimmerID = '".$id."'";
        $result = $db_obj->query($sql);
    }
    ?>
    <?php 
    $count = 1;
    $result = $db_obj->query("SELECT * FROM Reservierungen");
    while(($row = $result->fetch_assoc())!== null){
        $breakfast = bool_toString($row["Frühstück"]); //1 und 0 zu Ja und Nein String
                    $parking = bool_toString($row["Parkplatz"]);
                    $pet = bool_toString($row["Haustier"]);
                    
                    echo "<div class='col-3'></div>"; //Boxen in die Mitte bringen

                   echo "<div class='col-6 box' style='margin-top:2%;'>";
                   echo "<p>".$count .". Die Buchungsnummer lautet ".$row["ZimmerID"]." von ".$row["user"]."</p>";
                   echo "<p>Der Aufenthalt ist von ".$row["Anreise"]." bis ".$row["Abreise"]." für ".$row["Nächte"]." Nächte.</p>"; 
                   echo "<p>Mit Frühstück: ".$breakfast.", Mit einem Parkplatz; ".$parking.", Mit einem Haustier: ".$pet."</p>"; 
                   echo "<p>Der Preis lautet ".$row["Preis"]." €.</p>";
                   echo "<p>Der Status der Buchung ist: ".$row["Status"]."</p>";
                   $radioname = "radios".$row["ZimmerID"];
                   ?>

                   <form action="AdReservierung.php" method="get"> <!--Status der Reservierung bearbeiten-->
                    <label for="Anrede">Status ändern:</label> <br/>
                    <input type="radio" name="<?php echo $radioname?>" value="Bestätigt"> Bestätigt <br>
                    <input type="radio" name="<?php echo $radioname?>" value="Storniert"> Storniert
                    <br>
                    <input type="submit" value="Ändern"/>
                   <?php
                    echo "</div>";
                    echo "<div class='col-3'></div>";
                    if(isset($_GET["$radioname"])&&!empty($_GET["$radioname"])){
                        update("Status", $_GET[$radioname], $db_obj, $row["ZimmerID"]);
                        echo "<p style='font-size:smaller;'>Der Status dieser Reservierung wurde auf ".$_GET[$radioname]." geändert.</p>";
                    }
            

                    $count++;
    }
    ?>
        </div>
    </div>
</body>
</html>