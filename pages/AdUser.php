<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Userverwaltung </title>
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
<body>
<div class="container">
        <div class="row">
    <?php include 'Navbar.php'?>
    <form action="AdStammdaten.php" method="post">
        <label for="Stammdaten">ID eingeben um Stammdaten zu ändern:</label><br>
        <input type="text" name="Stammdaten" placeholder="24">
        <input type="submit" value="Ändern">
        </form>
    <?php
    function update($column, $value, $db_obj, $id){ //Wert in datenbank ändern
        $sql = "UPDATE users 
                SET ".$column." = '".$value."'
                WHERE id = '".$id."'";
        $result = $db_obj->query($sql);
    }
    /*- Liste User x
     - Profilbearbeitung User
     - Ändern Passwörter
     - Aktivitätsstatus
     - inaktive User kein Login*/
        $count = 1;
        $result = $db_obj->query("SELECT * FROM users");
        while(($row = $result->fetch_assoc())!== null){
            echo "<div class='col-3'></div>";

            echo "<div class='col-6'>";
            echo "<p class='p'>".$count.". User: ".$row["Username"]." mit der ID: ".$row["id"].
            "<br>".$row["Geschlecht"]." ".$row["Name"]." ".$row["Nachname"].
            "<br>mit der Mail ".$row["Usermail"].
            "<br>der Account ist ".$row["Status"].".</p>";
            echo "</div>";

            echo "<div class='col-3'></div>";
            $status = "status".$row["id"];
            ?>
            <form action="AdUser.php" method="post">
            <label for="<?php echo $status?>">Daten ändern:</label><br>
            <input type="radio" name="<?php echo $status?>" value="aktiv"> Status: Aktiv <br>
            <input type="radio" name="<?php echo $status?>" value="inaktiv"> Status: Inaktiv <br>
            <input type="radio" name="<?php echo $status?>" value="deaktiviert"> Status: Deaktiviert <br>
            <input type="submit" value="Ändern">
            <br>
            </form>
            
            <?php
           if(isset($_POST["$status"])&&!empty($_POST["$status"])){
                update("Status", $_POST["$status"], $db_obj, $row["id"]);
                echo "<p style='font-size:smaller;color:green;'>Der Status dieses Benutzers wurde auf ".$_POST["$status"]." geändert.</p>";
           }
            $count++;
            
        }
    ?>
        </div>
    </div>
</body>
</html>