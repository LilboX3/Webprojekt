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
            margin-top: 20%;
            /*position: fixed; Verhindert scrollen und verdeckt navbar!*/
            background-repeat: no-repeat;
            background-size: 100%;
        }

        .box {
            background-color: lightblue;
            border: 1px solid white;
            border-radius: 4px;
        }

        li {
            margin-bottom: 2%;
        }
    </style>
<link rel="icon" type="image/png" href="https://icons.iconarchive.com/icons/google/noto-emoji-activities/96/52769-spade-suit-icon.png">
</head>

<body>

    <?php include 'Navbar.php' ?>
    <div class="container-fluid mt-2 background">
        <div class="row">
            <div class="col-sm-5 box" style="margin-top:10%;">
                <h2>News zu unserem Hotel:</h2>
                <p>Unglaublich - Wir feiern bald unseren 100. Geburtstag!</p>
                <p>Des Nâtes eröffnet sein erstes Hotel außerhalb Europas!</p>
                <p>Wow - schon fast 100.000 Mal gebucht!</p>
                <p>Gewinnspiel - unser 100.000 Gast bekommt seinen Aufenthalt geschenkt!</p>
                <p>Die schönste Hotellobby Europas - jetzt auch mit Auszeichnung!</p>
                <p>Zum 10. Mal in Folge: Top 10 Hotels in Österreich</p>
            </div>
            <div class="col-sm-2" style="margin-top:10%;">

            </div>
            <div class="col-sm-5 box" style=" margin-top:10%;">
                <h2>Heutige Aktivitäten</h2>
                <li>Gymnastik im Pool</li>
                <li>Mountainbike mit den Profis</li>
                <li>Zeichenspaß im Keller</li>
                <li>Öl-Massage</li>
                <li>Nachtwanderung mit Fackeln</li>
                <li>Weinverkostung im Abendsaal</li>
                <li>Vernissage im Salon</li>
                <li>... und viele mehr!</li>
            </div>
        </div>
        <div class="row" style="background-color:antiquewhite; margin-top: 2%;">
            <p> Wir sind Des Nâtes - das entspannte und stylische Hotel wo es für jeden was zum Erleben gibt! </p>
        </div>

    </div>

    </div>



</body>

</html>