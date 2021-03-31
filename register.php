<?php

require_once "database.php";
$message = "";

if (isset($_POST['dodaj']))
{
    if(empty($_POST["login2"]) || empty($_POST["haslo1"]) || empty($_POST["haslo2"]))
    {
        $message = '<label>Wszystkie pola są wymagane</label>';
        echo $message;
    } 
    else
    {
        if (strlen($_POST["login2"])> 25 ) 
        {
            $message = '<label>Login jest za długi</label>';
            echo $message;
        }
        else if(strlen($_POST["haslo1"])> 25)
        {
            $message = '<label>Hasło jest za długie</label>';
            echo $message;
        }

        else if($_POST["haslo1"] == $_POST["haslo2"])
        {
            $sql = "INSERT INTO users (nick, pass) VALUES (:nick, :pass)";
            $stmt = $db->prepare($sql);
            $stmt->execute(
                array(                   
                    'nick' => $_POST['login2'],
                    'pass' => $_POST['haslo1']
                )
            );
            header("location: index.php");
            exit();
        }
    else 
    {
        $message = '<label>Hasła nie są takie same</label>';
        echo $message; 
    }        
}
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rejestracja</title>
    <link rel="stylesheet" type="text/css" href="style.css"> 
    <link href="https://fonts.googleleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">
</head>

<body>

<form method="POST">

        Login: <br><input type="text" name="login2"><br>
        Hasło: <br><input type="password" name="haslo1"><br>
        Potwierdź Hasło: <br><input type="password" name="haslo2"><br><br>
        <input type="submit" name="dodaj" class="btn btn-primary btn-block" value="Zarejestruj się"><br><br>

</form>
</body>
</html>
