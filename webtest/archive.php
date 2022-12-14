
<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="res/css/stylesheet.css">
    <title>Vehicle Archive</title>
</head>

<body>

    <!--ToDo: Navbar mittels include einfügen-->
    <?php include 'navbar.php'?>

    <!--ToDo: Überprüfen Sie, ob ein gültiger User eingeloggt ist. Wenn dies so ist, kann dieser z.B. zur login.php Seite weitergeleitet werden.-->
    

    <header>
        <div class="container jumbotron">
            <h1 class="display-1">Vehicle Archive</h1>
        </div>
    </header>

    <main>
        <?php 
    if(isset($_SESSION["loggedIn"])&&$_SESSION["loggedIn"]){ //Seite nur anzeigen wenn man eingeloggt ist.

    ?>
    <div class="container">
            <div class="row">
                <div class="card-group">
                    <div class="card">
                        <img class="card-img-top" src="res/img/horse-carriage.jpg" alt="Horse Carriage">
                        <div class="card-body">
                            <h5 class="card-title">Horse Carriage</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
                        </div>
                    </div>
                    <div class="card">
                        <img class="card-img-top" src="res/img/galleon.jpg" alt="Galleon">
                        <div class="card-body">
                            <h5 class="card-title">Galleon</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
                        </div>
                    </div>
                    <div class="card">
                        <img class="card-img-top" src="res/img/bicylce.jpg" alt="Bicycle">
                        <div class="card-body">
                            <h5 class="card-title">Bicycle</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="card-group">
                    <div class="card">
                        <img class="card-img-top" src="res/img/locomotive.jpg" alt="Steam Locomotive">
                        <div class="card-body">
                            <h5 class="card-title">Steam Locomotive</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
                        </div>
                    </div>
                    <div class="card">
                        <img class="card-img-top" src="res/img/automobile.jpg" alt="Automobile">
                        <div class="card-body">
                            <h5 class="card-title">Automobile</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
                        </div>
                    </div>
                    <div class="card">
                        <img class="card-img-top" src="res/img/cable-car.jpg" alt="Cable Car">
                        <div class="card-body">
                            <h5 class="card-title">Cable Car</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
                        </div>
                    </div>
                </div>
            </div>

            
            <div class="row">
                <div class="card-group">
                    <div class="card">
                        <img class="card-img-top" src="res/img/plane.jpg" alt="Plane">
                        <div class="card-body">
                            <h5 class="card-title">Plane</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
                        </div>
                    </div>
                    <div class="card">
                        <img class="card-img-top" src="res/img/cable-lift.jpg" alt="Cable Lift">
                        <div class="card-body">
                            <h5 class="card-title">Cable lift</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
                        </div>
                    </div>
                    <div class="card">
                        <img class="card-img-top" src="res/img/moon-vehicle.jpg" alt="Moon vehicle">
                        <div class="card-body">
                            <h5 class="card-title">Moon vehicle</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <?php } else { //wenn nicht eingeloggt: zurück zum login!
            header("Location: login.php");
        }

        ?>
    </main>
    
    <?php
        include 'footer.php';
    ?>

</body>
</html>