<?php
$cookie_name="User";
$cookie_value="Preeti Modanwal";
setcookie($cookie_name,$cookie_value,time()+(10),"/");
?>
<!DOCTYPE html>
<html lang="en">
<head> 
</head>
<body>
<?php
echo "cookie is set and recognise the file and print value ".$_COOKIE["$cookie_name"];  
?>  
</body>
</html>
