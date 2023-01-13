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
    <?php include 'Navbar.php'?>
    <div class="container">
        <div class="row">
            <h2>Ihre Reservierungen: </h2>
            <div class="col box">
                <div class="row">
                <?php 
                function bool_toString($bool){
                    if($bool==1){
                        return "Ja";
                    }
                    return "Nein";
                }
                $count = 1;
                 $result = $db_obj->query("SELECT * FROM Reservierungen WHERE user = '".$_SESSION["username"] ."'");
                 while(($row = $result->fetch_assoc())!== null){

                    $breakfast = bool_toString($row["Frühstück"]); //1 und 0 zu Ja und Nein String
                    $parking = bool_toString($row["Parkplatz"]);
                    $pet = bool_toString($row["Haustier"]);
                    
                    echo "<div class='col-4'></div>"; //Boxen in die Mitte bringen

                   echo "<div class='col-4 box2'>";
                   echo "<p>".$count .". Ihre Buchungsnummer lautet ".$row["ZimmerID"]."</p>";
                   echo "<p>Ihr Aufenthalt ist von ".$row["Anreise"]." bis ".$row["Abreise"]." für ".$row["Nächte"]." Nächte.</p>"; 
                   echo "<p>Mit Frühstück: ".$breakfast.", Mit einem Parkplatz; ".$parking.", Mit einem Haustier: ".$pet."</p>"; 
                   echo "<p>Sie zahlen bei Ankunft insgesamt ".$row["Preis"]." €.</p>";
                    echo "</div>";

                    echo "<div class='col-4'></div>";

                    $count++;
                 }
                ?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>