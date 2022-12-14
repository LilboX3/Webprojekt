
<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="res/css/stylesheet.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <title>Vehicle Archive</title>
</head>

<body>

    <!--ToDo: Navbar mittels include einfügen-->
    <?php include 'navbar.php'?>
    <header>
        <div class="container jumbotron">
            <h1 class="display-1">Welcome to the archives</h1>
        </div>
    </header>

    <main>
        <div class="container">
            <div class="row">
                <div class="card-group">
                    <div class="card">
                        <img class="card-img-top" src="res/img/automobile.jpg" alt="Automobile">
                        <div class="card-body">
                            <h5 class="card-title">Automobile</h5>
                            <p class="card-text">Find out exciting details about the invention of the automobile and discover the models of the respective decades.</p>
                        </div>
                    </div>
                    <div class="card">
                        <img class="card-img-top" src="res/img/locomotive.jpg" alt="Steam Locomotive">
                        <div class="card-body">
                            <h5 class="card-title">Steam Locomotive</h5>
                            <p class="card-text">Travel back with us to the time of the first steam locomotives and learn more about the possibilities they brought and which hurdles had to be overcome.</p>
                        </div>
                    </div>
                    <div class="card">
                        <img class="card-img-top" src="res/img/bicylce.jpg" alt="Bicycle">
                        <div class="card-body">
                            <h5 class="card-title">Bicycle</h5>
                            <p class="card-text">Even before the bicycle's ancestor the penny-farthing was used, there was the dandy horse, which had been invented more than 200 years ago.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php
            /*
            **  Fügen Sie hier die Logik (in PHP) und den Text "Before you start exploring, please log in ..." ein,
            **  welcher nur angezeigt werden soll, wenn niemand eingeloggt ist.
            */
            if(!isset($_SESSION["loggedIn"])||!$_SESSION["loggedIn"]){ //Nur anzeigen, wenn man eingeloggt ist!
                echo '<div class="col" style="text-align:center; margin-top:4%;">
                Before you start exploring, please <a href="login.php">log in.</a>
            </div>';
            }
            
        ?>
    </main>

    <?php
        include 'footer.php';
    ?>
    
</body>
</html>