<?php
session_start();
require_once "database.php";
$message = "";

if (isset($_POST['zaloguj']))
{
    if(empty($_POST["login"]) || empty($_POST["haslo"]))
    {
        $message = '<label>Wszystkie pola są wymagane</label>';
        echo $message;
    }
    else 
    {
        $query = "SELECT * FROM users WHERE nick = :nick 
        AND pass = :pass";
        $statement = $db->prepare($query);
        $statement->execute(
            array(
                'nick' => $_POST['login'],
                'pass' => $_POST['haslo']
            )
        );
        $count = $statement->rowCount();
        if($count > 0)
        {
            $_SESSION['login'] = $_POST['login'];
            header("location: zalogowano.php");
            exit();
        }
        else 
        {
           $message = '<label>Login, albo hasło jest niepoprawne</label>';
           echo $message;
        }

    }
}










