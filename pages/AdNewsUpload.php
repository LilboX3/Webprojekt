<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> News Upload </title>
    <link rel="icon" type="image/png" href="https://icons.iconarchive.com/icons/google/noto-emoji-activities/96/52769-spade-suit-icon.png">
    <link rel="stylesheet" href="webstyle.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="StyleNav.css">
    <link rel="stylesheet" href="helper.css">
</head>
<body>
    <?php include 'Navbar.php'?>
    <div class="row" style="margin-top:1%;">
        <div class="col">
            <form enctype="multipart/form-data" method="post" action="upload.php">
            <label for="ntitel">Titel des News-Beitrags:</label> <br/>
            <textarea name="ntitel" id="ntitel" rows="1" cols="39" placeholder="Titel"></textarea> <br>
            <label for="textmsg">News-Beitrag:</label> <br/> <!-- Das sollt der File uplopad sein, aber unwichtig, auch zum rausnehmen-->
            <textarea name="textmsg" id="textmsg" rows="10" cols="39" placeholder="Text..."></textarea> <br>
            <input type="file" name="picture"> <br> <br>
            <input type="submit" value="Hochladen">
            </form>
        </div>
    </div>
</body>
</html>

