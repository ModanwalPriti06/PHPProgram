<!DOCTYPE html>
<?php
$x="Ramesh";
$s=array("Pinki","Preeti","Kirti","Janhvi","Manvi");
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$l=strlen($x);
?>
    <?php
    echo "hello $s[0]</br>";
    echo "hello $s[1]</br>";
    echo "hello $s[2]</br>";
    echo "hello $s[3]</br>";
    echo "hello $s[4]</br>";
    echo $l;
    ?>
<hr/>
    <?php
echo strrev("hello  world!");
?>
<hr/>
    <?php
echo str_word_count("hello  world!");
?>
<hr/>
    <?php
echo strpos("hello  world!"," world");
?>
<hr/>
    <?php
echo str_replace("world","Preeti","hello  world!");
?>
</body>
</html>