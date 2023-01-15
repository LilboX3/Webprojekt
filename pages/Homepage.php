<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="StyleNav.css">
    <title>Home</title>
    <style>
        .background {
            background-image: url("pics/lobby.jpg");
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
            height:800px;
            
        }
        .box {
            padding-top:3%;
            padding-bottom: 1%;
            background-color:lightblue;
            border: 3px solid darkslategray;
            border-radius: 4px;
            
        }
        .box2{
            background-color: white;
            border-radius: 4px;
            display: block;
        }

        li {
            margin-bottom: 2%;
        }
    </style>
<link rel="icon" type="image/png" href="https://icons.iconarchive.com/icons/google/noto-emoji-activities/96/52769-spade-suit-icon.png">
</head>

<body>
    <?php include 'Navbar.php' ?>
    
    <div class="background">
        <div class="row">
            <div class="col-2"></div>
            <div class="col-8 box" style="margin-top:5%;text-align:center;">
                <h2>Erleben Sie Des Nâtes</h2>
                <p>"Ein einmaliges Erlebnis!" - 10/10 Top 10 Goofiest Hotels Daily</p>
                <p style="font-size:smaller;">"Es ist einfach eins der Hotels jemals" - Gast</p>
            </div>
            <div class="col-2"></div>
        </div>
        <div class="row">
        <div class="col-4"></div>
            <div class="col-4 box2" style="margin-top:1%; text-align:center;">
                <p><a href="Registrierung.php">Erstellen Sie ein Konto</a></p>
                <p><a href="News.php">Hotel-News</a></p>
                <p><a href="Galerie.php">Bilder</a></p>
                <p><a href="FAQ.php">Mehr erfahren</a></p>
            </div>
            <div class="col-4"></div>
        </div>
    </div>
    


</body>

</html>