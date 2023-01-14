<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Hotel News </title>
    <link rel="icon" type="image/png" href="https://icons.iconarchive.com/icons/google/noto-emoji-activities/96/52769-spade-suit-icon.png">
    <link rel="stylesheet" href="webstyle.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="StyleNav.css">
    <link rel="stylesheet" href="helper.css">
    <style>
    .box{
        background-color: #739fb5;
        border-radius: 4px;
    }

    .thumbnail {
    width: 500px;
    height: 300px;
    display: inline-block;
    background-size: cover;
    background-position: center center;
    background-repeat: no-repeat;
    }
    </style>
</head>
<body>
<?php include 'Navbar.php';?>
<h1>Hotel News</h1>
<br>
    <?php
    $query = $db_obj->query("SELECT * FROM news ORDER BY id DESC");

    if($query->num_rows > 0){
        while($row = $query->fetch_assoc()){
            $titel = $row["titel"];
            $imageURL = $row["image path"];
            $text = $row["text"];
            $datum = $row["datum"];
    ?>
    <div class="content">
    <div class="container">
    <div class="row" style="margin-top:1%;margin-bottom:5%">
    <div class="col box">
    <h2 style="color:white;"><?php echo $titel; ?></h2>
    <p style="color:white"><?php echo $datum; ?></p>
    <div class ="thumbnail" style="background-image:url(<?php echo $imageURL; ?>)"></div>
    <br>
    <p style="background-color: white; margin-top: 1%"><?php echo $text; ?></p>
    </div>
    </div>
    </div>
    </div>
<?php }
}else{ ?>
    <p>Noch keine News-Artikel vorhanden...</p>
<?php } ?>

</body>
</html>