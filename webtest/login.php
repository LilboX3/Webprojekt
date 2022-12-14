      
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
    <style>
        input{
            margin-bottom: 1%;
            margin-top: 1%;
        }
        .box{
            background-color: lightblue;
            border-radius: 5px;
        }
        .errorlog{
            color: darkred;
            font-size: smaller;
        }
    
    </style>
</head>

<body>

    <!--ToDo: Navbar mittels include einfügen-->
    <?php include 'navbar.php'?>
    <header>
        <div class="container jumbotron">
            <h1 class="display-1">Login</h1>
        </div>
    </header>

    
    <main>
        <!--ToDo: Login-Formular und PHP-Logik einfügen-->
        <div class="container">
            <div class="row">
                <div class="col-4">

                </div>
                <div class="col-4" style="text-align:center;">
                    <form method="post" class="box">
                        <input type="text" name="username" placeholder="Username" required> <br>
                        <input type="password" name="password" placeholder="Password" required> <br>
                        <input type="submit" value="Login">
                    </form>
                    <?php 
                    $rightUser = "thisUser"; //die User mit denen man sich einloggen kann!
                    $rightPW = "password123";
                    $rightUser2 = "thisUser2";
                    $rightPW2 = "password1234";
                    if(isset($_POST["username"])){
                    if(!isset($_SESSION["loggedIn"])){ //Login Daten in Session speichern, dann bleibt man eingeloggt
                      $_SESSION["loggedIn"] = false;
                    }
                    if(!$_SESSION["loggedIn"]){
                      if(($_POST["username"]==$rightUser && $_POST["password"] == $rightPW) 
                      || ($_POST["username"]==$rightUser2 && $_POST["password"] == $rightPW2)){
                        $_SESSION["loggedIn"] = true; //Man kann auf  archiv zugreifen und bleibt eingeloggt.
                        header("Location: archive.php");
                      }

                      else {
                        echo "<p class='errorlog'>The user or password is wrong.</p>"; //Login hat nicht funktioniert.
                      }
                    }
                }
                    ?>
                </div>
                <div class="col-4">
                    
                </div>
            </div>
        </div>
    

    </main>

    <?php
        include 'footer.php';
    ?>

</body>
</html>