<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="StyleNav.css">
    <title>Ihre Anfrage</title>
    <link rel="icon" type="image/png" href="https://icons.iconarchive.com/icons/google/noto-emoji-activities/96/52769-spade-suit-icon.png">
    <style>
    .box{
        background-color: #555;
        border-radius: 4px;
    }
    </style>
</head>
<body>
    <?php include 'Navbar.php'?>
    <div class="container">
        <div class="row" style="margin-top: 1%;">
    <div class="col">
    News-Beitrag wird gepostet...
    </div>
    <div class="col box">
    <?php 
    $target_dir = "uploads/";

    echo "<h4 style='margin-top:1%;border: 1px solid black; border-radius: 3px; background-color: white;'>" . $_POST["ntitel"] . "</h4>"; //Text ausgeben

    
    if(isset($_FILES["picture"])){
        $picture = $_FILES["picture"];
        $type = mime_content_type($picture["tmp_name"]); //Typ von upload File in Variable speichern
        $check = getimagesize($picture["tmp_name"]); //on failure: returns false.
        if(strpos($type, "image")!==false){ //kann ein false oder int rauskommen bei strpos, wenn int dann ist es true. wenn es nicht vom typ false ist: TYP STIMMT!
            // !== bedeutet ist nicht vom typ
            move_uploaded_file($picture["tmp_name"], "uploads/".$picture["name"]);
            echo "<img src=\"uploads/" . $picture["name"]. "\" height='400' width=''> </img>";
        } else {
            echo "Fehler - ".$type." ist kein Bild und wurde nicht hochgeladen.";
        }
    }
    
    echo "<p style='margin-top:1%;border: 1px solid black; border-radius: 3px; background-color: white;'>" . $_POST["textmsg"] . "</p>";
    
    ?>  
            </div>
        </div>
    </div>
</body>
</html>