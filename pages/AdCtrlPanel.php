<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Control Panel </title>
    <link rel="icon" type="image/png" href="https://icons.iconarchive.com/icons/google/noto-emoji-activities/96/52769-spade-suit-icon.png">
    <link rel="stylesheet" href="webstyle.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="StyleNav.css">
    <link rel="stylesheet" href="helper.css">
    <style>
        ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        margin-top: 5%;
        overflow: hidden;
        background-color: #222;
        
        }

        li a {
        display: block;
        color: white;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
        }

        li a h4:hover {
        color: #555;
        }

        h4 {
        color: white;
        }

        .content {
        width: 40%; 
        margin: auto; 
        border: none;
        text-align: center;
        }
        

    </style>
</head>
<body>
    <?php include 'Navbar.php'?>
    <h2>Admin Control Panel</h2>
    <div class="content">
    <ul>
        <li><a href="AdNewsUpload.php"><h4>News Beitrag Posten</h4></a></li>
        <li><a href="AdUser.php"><h4>Userverwaltung</h4></a></li>
        <li><a href="AdReservierung.php"><h4>Reservierungsverwaltung</h4></a></li>
        <li><a href="AdNeueReg.php"><h4>Neue Registrierungen</h4></a></li>
    </ul>
    </div>
</body>
</html>