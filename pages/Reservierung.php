
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="StyleNav.css">
    <title>Log-In Erfolgt</title>
<link rel="icon" type="image/png" href="https://icons.iconarchive.com/icons/google/noto-emoji-activities/96/52769-spade-suit-icon.png">
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
<?php
    function check_status($user, $db_obj){
      $status = get_cell("Status", $user, $db_obj);
      return $status;
    }

    if(!isset($_SESSION["loggedIn"])){ //Login Daten in Session speichern, dann bleibt man eingeloggt
      $_SESSION["loggedIn"] = false;
      $_SESSION["admin"] = false; //in session als admin angemeldet?
    }
    if(!$_SESSION["loggedIn"]){
      if(isset($_POST["usrnm"]) && isset($_POST["pw"])){
        $user = $_POST["usrnm"];
        $hashed = $db_obj->query("SELECT `password` FROM users WHERE username = '".$user ."'");
        $result = mysqli_fetch_assoc($hashed);
        $cell=(string)$result["password"];
        $_SESSION["status"] = check_status($user, $db_obj); //aktiv, inaktiv, deaktiviert?

        $admin = $db_obj->query("SELECT `admin` FROM users WHERE username = '".$user ."'");
        $result = mysqli_fetch_assoc($admin);
        $admincell = (string)$result["admin"]; //string aus datensatz mit admin holen
  
        if($_SESSION["status"]!="aktiv"){
          
        }
        else if(password_verify($_POST["pw"], $cell)){
          $result = $db_obj->query("SELECT * FROM users WHERE username = '".$user ."'");
        if(($row = $result->fetch_assoc())!== null){
          $_SESSION["username"]=$user;
          $_SESSION["loggedIn"] = true; //Man kann auf Reservierung zugreifen, ohne sich nochmal einzuloggen#
        if($admincell=="yes"){
          $_SESSION["admin"]=true;
        }
        

        } 
      } else if($_POST["pw"]==NULL){
        header("Location: Login.php?nopw=true");
      } else {
          header("Location: Login.php?Loginerror=true&username=".$_POST["usrnm"]); //Falsche Daten eingegeben: error wird ausgebenen bei Login
        }
      
      } else {
        header("Location: Login.php?nopw=".$_POST["usrnm"]); 
      }
      
    }
 

    ?>
    <?php 
    if (!isset($_SESSION['reload_index'])&&$_SESSION["loggedIn"]){
        $_SESSION['reload_index'] = 'no';
        header("Location: Reservierung.php"); 
      } 
    ?>
            <div class= "col" style="margin-top:1%;">   
            Willkommen zurück! Sie sind eingeloggt als <?php echo $_SESSION["username"]; 
            ?> . 

            </div>
            <div class="col" style="margin-top:1%;">
              <input type="submit" value="Meine Daten ändern" onclick="window.open('Stammdaten.php');">
            </div>
          </div>
          <div class="row">
            <div class="col box" style="margin-top: 1%;">
              <form action="Berechnung.php" action="get">
                <?php 
                if(isset($_SESSION["Preis"])){
                $_SESSION["Preis"]=NULL;} ?>
                <label for="Zimmer">Reservieren sie ein Zimmer:</label> <br/>
                 Doppelzimmer Standard <input type="number" name="anzahlStd" style="width: 2em" min="1" max="50"> 140 € p. P.<br>
                 Deluxe Doppelzimmer <input type="number" name="anzahlDel" style="width: 2em" min="1" max="10"> 200 € p. P.<br>
                 Einzelzimmer <input type="number" name="anzahlEinz" style="width: 2em" min="1" max="50"> 120 € p. P.<br>
                 Familienzimmer <input type="number" name="anzahlFam" style="width: 2em" min="1" max="20"> 180 € p. P.<br>
                <input type="submit" name="Buchen" value="Preis berechnen">
              </form>
            </div>
          </div>
        </div>
            
       
    
    
    
</body>
</html>