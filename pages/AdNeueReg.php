<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Neue Registrierungen </title>
    <link rel="icon" type="image/png" href="https://icons.iconarchive.com/icons/google/noto-emoji-activities/96/52769-spade-suit-icon.png">
    <link rel="stylesheet" href="webstyle.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="StyleNav.css">
    <link rel="stylesheet" href="helper.css">
</head>
<body>
    <?php include 'Navbar.php'?>
    <h1>Neue Registrierungen</h1>
    <a href="AdUser.php">User verwalten...</a>
<br>
    <?php
    $query = $db_obj->query("SELECT * FROM users ORDER BY id DESC");

    if($query->num_rows > 0){
        while($row = $query->fetch_assoc()){
            $user = $row["Username"];
            $anrede = $row["Geschlecht"];
            $name = $row["Name"];
            $lname = $row["Nachname"];
    ?>
    <div class="content">
    <div class="container">
    <div class="row" style="margin-top:1%;margin-bottom:5%">
    <div class="col box">
    <p style="background-color: white; margin-top: 1%"><?php echo $anrede;?> <?php echo $name;?> <?php echo $lname;?> 
    hat sich unter dem Username "<?php echo $user;?>" registriert!</p>
    </div>
    </div>
    </div>
    </div>
<?php }
}else{ ?>
    <p>Noch keine Registrierungen...</p>
<?php } ?>

</body>
</html>