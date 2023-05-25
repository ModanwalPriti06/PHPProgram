<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function cl(){
    static $x=0;
    echo $x;
    echo "</br>";
    $x++;
}
 cl();
 cl();
 cl();
 cl();
 cl();

    ?>
</body>
</html>