<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="StyleNav.css">
    <title>!Account Problem!</title>
<link rel="icon" type="image/png" href="https://icons.iconarchive.com/icons/google/noto-emoji-activities/96/52769-spade-suit-icon.png">
</head>
<style>
    .error{
        color:darkred;
        background-color:lightblue;
        border-radius: 5px;
    }
    .center {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 50%;
}
</style>

<?php include 'Navbar.php'?>
<body>
    <div class="container">
        <div class="row">
        <h1 style="text-align:center;">Es gibt ein Problem mit Ihrem Account :(</h1>
            <div class="col-2"></div>
            <div class="col-8">
            
    <?php 
    if(isset($_GET["status"])&&$_GET["status"]=="inaktiv"){
        ?>
    <p class="error">Ihr Account <?php echo $_GET["username"];?> ist aufgrund eines Problems inaktiv und Sie können sich nicht
    einloggen. <br> Kontaktieren Sie uns zum Reaktivieren!</p>
    <?php
    } else { ?>
    <p class="error">Ihr Account <?php echo $_GET["username"];?> wurde aus Sicherheitsgründen deaktiviert und wird demnächst gelöscht.
    <br>Sie müssen einen Neuen erstellen, um fortfahren zu können.</p>
    <?php
    $result = $db_obj->query("DELETE FROM users WHERE username = '".$_GET["username"] ."'");
    }
    ?>
    <img class="center" src="pics/goofy.png" alt="Account error">
        </div>
        <div class="col-2"></div>
        </div>
    </div>

</body>
</html>