<?php

require_once "logowanie.php";


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logowanie do aplikacji</title>
    <link rel="stylesheet" type="text/css" href="style.css"> 
    <link href="https://fonts.googleleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">
</head>

<body>
    <?php
    if (isset($message))
        {
            echo '<label class="text-danger">'.$message.'</label>';
        }
    ?>
    <form action="logowanie.php" method="POST">

        Login: <br><input type="text" name="login"><br>
        Hasło: <br><input type="password" name="haslo"><br><br>
        <input type="submit" name="zaloguj" class="btn btn-primary btn-block" value="Zaloguj się"><br><br>

        <div class="register">
            Nie masz konta? <a href="register.php">Zarejestruj się</a>
        </div>



    </form>




</body>
</html>
