<?php
session_start();
if(isset($_SESSION['login']))
{
    echo "Dzień dobry ";
    echo $_SESSION['login'];

    echo '<br><a href="index.php">Wyloguj się</a>';
}


