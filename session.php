<?php
//here start a session is used the a predefine function of start session
session_start();
$_SESSION["username"]="Priti modanwal";
$_SESSION["Email"]="pritivns612@gmail.com";
echo "Start the session ",$_SESSION["username"];
?>