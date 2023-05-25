<?php
session_start();
echo "Welcome Dear! ",$_SESSION["username"],"</br>";
echo "Email id is:  ",$_SESSION["Email"];
?>