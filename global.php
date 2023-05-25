<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $a=10;
    function myTest(){
        $a=67;
        echo "<p>Variable a inside funstion is ".$a."</p>";
    }
    myTest();
    echo "<p>Variable a outside funstion is:".$a."</p>";
    ?>
</body>
</html>