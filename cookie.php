
<?php
$cookie_name="Preetimodanwal";
//$cookie_value="Computer science";
setcookie($cookie_name,time()+(10),"/");
?>
<html>
<head></head>
<body>
<?php

if(isset($_COOKIE[$cookie_name])){

echo "Cookie name is :".$cookie_name." is set</br>";
//echo "Cookie value is :".$cookie_value." is set";
}
else
{
    echo "cookie value is ".$cookie_name." is not set</br>";
 //   echo "Cookie value is :".$cookie_value." is not set";
}
?>
    
</body>
</html>