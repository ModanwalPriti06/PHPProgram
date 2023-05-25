<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $x=10;
    $y=20;
    function myTst(){
        $GLOBALS['y']=$GLOBALS['x']+$GLOBALS['y'];

    }
    myTst();
    echo $y;
    ?>
</body>
</html>