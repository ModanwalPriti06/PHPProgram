<?php
$x="Ramesh";
$y="Rameshwar";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$l=strlen($x);
$k=strtoupper($x);
$v=strtolower($x);
$n=strcmp($y,$x)
?>
    <?php
   echo "<h1>hello $x has character $l </br></h1>";
   echo "<h1>hello $x, $k </br><h1>";
   echo "<h1>hello $x, $v </br><h1>";
   echo "<h1>hello $x, $y compare is $n<h1>";
    ?>
</body>
</html>