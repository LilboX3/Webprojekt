<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Hotel FAQ </title>
    <link rel="stylesheet" href="webstyle.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="StyleNav.css">
    <link rel="stylesheet" href="helper.css">
<link rel="icon" type="image/png" href="https://icons.iconarchive.com/icons/google/noto-emoji-activities/96/52769-spade-suit-icon.png">
</head>
<body>
    <?php include 'Navbar.php'?> <!-- Navbar auf allen Seiten: eigene File, einfach überall inkludieren-->
        <div class="container">
            <div class="row" style="margin-top:2%;background-color:lightblue; border-radius: 4px;">
                <div class="col-sm-6" style="margin-top: 1%;"> <!--die Fragen nebeneinander machen -->
            <details><summary>Wie erhalte ich eine Rechnung?</summary> <!--Kontaktieren sie uns-->
                <p>Wenn sie nicht automatisch eine Rechnung erhalten, können Sie uns <br>
                im Impressum kontaktieren. </p></details>
        

        
            <details><summary>Kann ich direkt auf der Website buchen? </summary>
            <p> Ja, Sie können bei unserer Auswahl an Zimmern direkt eines auswählen <br>
            und online buchen.</p> </details>
        

        
            <details><summary>Kann ich online bezahlen?</summary>
            <p> Wir haben viele verschiedene Möglichkeiten, online zu bezahlen. <br>
            Sie können, wenn sie ein Zimmer buchen, per Kreditkarte, Bankomatkarte <br>
        oder PayPal zahlen.</p></details>
        

        
        <details><summary>Wo finde ich Kontaktdaten?</summary>
            <p>Um das Hotel zu erreichen, können Sie unten auf den Link für das Impressum klicken, <br>
            um sämtliche Kontaktdaten zu finden.</p></details>
                </div>

                <div class="col-sm-6" style="margin-top: 1%;">
            <details><summary>Was soll ich tun, wenn ich keine Bestätiguns-Mail erhalten habe?</summary>
            <p> Sie können bei der Buchung die Option "Bestäiguns-Mail nochmal schicken <br>
            wählen, oder sie überprüfen Ihren Spam-Ordner. </p></details>
       

        
            <details><summary>Welche Zahlungsmethoden gibt es?</summary>
            <p> Sie können online mit Kredit- und Bankomatkarte oder mit Paypal zahlen.</p></details>
        

        
            <details><summary>Wo buche ich ein Zimmer?</summary>
            <p> Sie müssen zuerst einen Account erstellen und sich mit diesem auf unser Anmeldeseite einloggen.
                Dann können Sie unsere verschiedenen Optionen einsehen und ein Zimmer reservieren. </p></details>

            <details><summary>Wo sehe ich den Preis?</summary>
            <p> Bei unserer Auswahl an verschiedenen Zimmern können Sie auf eines <br>
            klicken und direkt den Preis pro Nacht einsehen. </p></details>
            </div>
        </div>
        <div class="row" style="margin-top:1%;">
            <div class="col">
        Haben Sie weitere Fragen? Schicken Sie uns eine Anfrage mit Screenshot. 
        <form enctype="multipart/form-data" method="post" action="upload.php">
            <label for="textmsg">Ihre Nachricht an uns:</label> <br/> <!-- Das sollt der File uplopad sein, aber unwichtig, auch zum rausnehmen-->
            <textarea name="textmsg" id="textmsg" rows="10" cols="39" placeholder="Ihre Nachricht"></textarea> <br>
            <input type="file" name="picture"> <br> <br>
            <input type="submit" value="Hochladen">

        </form>
            </div>
        </div>
    </div>

</link>
</body>
</html>