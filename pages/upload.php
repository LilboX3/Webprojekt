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
    <?php include 'Navbar.php';

    if(is_uploaded_file($_FILES['picture']['tmp_name']) && !empty($_POST["ntitel"]) && !empty($_POST["textmsg"])){
        $target_dir = "uploads/";
        $titel = $_POST["ntitel"];
        $text = $_POST["textmsg"];
        $picName = basename($_FILES["picture"]["name"]);
        $targetPath = $target_dir . $picName;

        move_uploaded_file($_FILES["picture"]["tmp_name"], $targetPath);
        $sql = "INSERT INTO `news` (`image path`, `titel`, `text`, `datum`) 
        VALUES ('$targetPath', '$titel', '$text', NOW())";
        mysqli_query($db_obj, $sql);

        echo "<div class='container'>
        <div class='row' style='margin-top: 1%;'>
        <div class='col'>
        News-Beitrag wird gepostet.
        </div>
        <div class='col box'>
        <h4 style='margin-top:1%;border: 1px solid black; border-radius: 3px; background-color: white;'>
        " . $_POST["ntitel"] . "</h4>
        <img src=".$targetPath." height='400' width=''> </img>
        <p style='margin-top:1%;border: 1px solid black; border-radius: 3px; background-color: white;'>" . $_POST["textmsg"] . "</p>
        ";



    } else {
        echo "<div style='margin-top:10%;text-align:center'> <p>Sie haben nicht alle Felder ausgefüllt!</p>
        <a href='AdNewsUpload.php'>Zurück</a>
        </div>";
    }
    ?>




</body>
</html>