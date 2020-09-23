<?php
//registreren.php

    include'database.php';

    $db = new database('localhost', 'root', '', 'project1', 'utf8');
    $db->executeQueryExample();

?>

<!DOCTYPE html>
<form action="signup.php" method="post">
    <input type="text" name="fname" placeholder="Voornaam" required /><br>
    <input type="text" name="tvoegsel" placeholder="Tussenvoegsel" required /><br>
    <input type="text" name="lname" placeholder="Achternaam" required /><br>
    <input type="text" name="email" placeholder="Email" required /><br>
    <input type="text" name="uname" placeholder="Gebruikersnaam" required /><br>
    <input type="text" name="pwd" placeholder="Wachtwoord" required /><br>
    <input type="text" name="cpwd" placeholder="Herhaal wachtwoord" required /><br>
    <input type="submit" value="Sign up!" required />
    < a href="index.php">ik heb al een account. Login!</a>
    </form>
</html>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inlog Pagina</title>

    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</head>
<body>
    <br>
    <br>
    <div class="container" style="width: 500px;">
        <h3>PHP Registratie Pagina</h3><br>
        <form action="signup.php" method="post">
            <input type="text" name="fname" placeholder="Voornaam" required /><br>
            <input type="text" name="tvoegsel" placeholder="Tussenvoegsel" required /><br>
            <input type="text" name="lname" placeholder="Achternaam" required /><br>
            <input type="text" name="email" placeholder="Email" required /><br>
            <input type="text" name="uname" placeholder="Gebruikersnaam" required /><br>
            <input type="text" name="pwd" placeholder="Wachtwoord" required /><br>
            <input type="text" name="cpwd" placeholder="Herhaal wachtwoord" required /><br>
            <input type="submit" value="Sign up!" required />
            < a href="index.php">ik heb al een account. Login!</a>
         </form>
        <br>
    </div>
</body>
</html>