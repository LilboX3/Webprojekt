<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Reservierung dieses Users </title>
    <link rel="icon" type="image/png" href="https://icons.iconarchive.com/icons/google/noto-emoji-activities/96/52769-spade-suit-icon.png">
    <link rel="stylesheet" href="webstyle.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="StyleNav.css">
    <link rel="stylesheet" href="helper.css">
</head>
<style>
    .box2{
        border-radius: 4%;
      display: block;
      background-color: lightblue;
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
<body>
<div class="container">
        <div class="row">
            <h2>Reservierungen des Users <?php echo $_GET["Reservierung"];?>:  </h2>
                <div class="row">
                <?php 
                
                $count = 1;
                 $result = $db_obj->query("SELECT * FROM Reservierungen WHERE user = '".$_GET["Reservierung"] ."'");
                 while(($row = $result->fetch_assoc())!== null){ //Alle Zeilen von Reservierungen durchgehen und ausgeben

                    $breakfast = bool_toString($row["Frühstück"]); //1 und 0 zu Ja und Nein String
                    $parking = bool_toString($row["Parkplatz"]);
                    $pet = bool_toString($row["Haustier"]);
                    
                    echo "<div class='col-4'></div>"; //Boxen in die Mitte bringen

                   echo "<div class='col-4 box2'>";
                   echo "<p>".$count .". Die Buchungsnummer lautet ".$row["ZimmerID"]." und es wurde am ".$row["Datum"]." gebucht.</p>";
                   echo "<p>Der Aufenthalt ist von ".$row["Anreise"]." bis ".$row["Abreise"]." für ".$row["Nächte"]." Nächte.</p>"; 
                   echo "<p>Mit Frühstück: ".$breakfast.", Mit einem Parkplatz; ".$parking.", Mit einem Haustier: ".$pet."</p>"; 
                   echo "<p>Bei Ankunft sind insgesamt ".$row["Preis"]." € zu zahlen.</p>";
                   echo "<p>Der Status der Buchung ist: ".$row["Status"]."</p>";
                    echo "</div>";

                    echo "<div class='col-4'></div>";

                    $count++;
                 }
                 if($count==1){
                    echo "<p> Noch keine Reservierungen vorhanden.. </p>";
                 }
                ?>
                </div>
        </div>
    </div>
</body>
</html>