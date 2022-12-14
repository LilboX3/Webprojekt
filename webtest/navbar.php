<?php session_start(); ?>
<nav class="navbar navbar-expand-sm navbar-light bg-lib fixed-top">
        <a class="navbar-brand" href="index.php"><img src="./res/img/archive.svg" height="28px"/></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainNav" aria-controls="mainNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse collapse" id="mainNav">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item navcenter"><a class="nav-link" href="index.php">Home</a></li>
                <li class="nav-item navcenter"><a class="nav-link" href="archive.php">Archive</a></li>
                <?php
                if(isset($_SESSION["loggedIn"])&&$_SESSION["loggedIn"]){ //nur logout angezeigt, wenn eingeloggt
                 echo '<li class="nav-item navcenter"><a class="nav-link" href="logout.php">Log out</a></li>';
                }
                ?>
            </ul>
        </div>
    </nav>