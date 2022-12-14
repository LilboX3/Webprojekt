<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="webstyle.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="StyleNav.css">
</head>

<body>
    
        <style>
            .errormsg {
                color:darkred;
            }
        </style>


<div class="center">
    <div class="tcenter">
        <h2>Anmelden</h2>
    </div>
    <div class="box">
    <form action="Reservierung.php" method="post">
        <label for="usrnm">Username:</label><br>
        <input style="width: 300px; height: 30px;" type="text" id="usrnm" name="usrnm" placeholder="Ihr Username"><br>
        <label for="pw">Passwort:</label><br>
        <input style="margin-bottom: 5%; width: 300px; height: 30px;" type="password" id="pw" name="pw" placeholder="Ihr Passwort"><br>
        <div class="tcenter">
        <input type="submit" value="Anmelden"/>
        </div>
        <p div="col"> <a style=" font-size: small;" href="FAQ.php" target="_blank">Ich habe mein Passwort vergessen</a></p>
        
    </form>
    </div>
    <p class = "errormsg">
    <?php 
        if(isset($_GET["nopw"])&&$_GET["nopw"]){
            echo "Sie müssen ihre Daten eingeben!";
        }
        if(isset($_GET["Loginerror"]) && $_GET["Loginerror"]){
            echo "Der Benutzer " .$_GET["username"]." existiert nicht oder das Passwort ist falsch.";
        }    
            ?>
        </p>
</div>
<?php include 'Navbar.php'?>

</body>
</html>
