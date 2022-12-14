<?php 
session_start();
if(isset($_SESSION["username"])){ //schon eingeloggt: wieder ausloggen indem session beenden
    session_destroy();
    header("Location: Login.php");
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="webstyle.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="StyleNav.css">
    <title>Ausloggen</title>
</head>
<body>
    <?php 
    include 'Navbar.php';
    ?>
    <div class="container">
        <div class="row">
            <div class="col" style="color:darkred; margin-top:1%;">
                Sie sind noch nicht eingeloggt! Gehen sie auf die Anmeldeseite.
            </div>
        </div>
    </div>
    
</body>
</html>