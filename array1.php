
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
</head>
<body>
    <?php
    $arr=["PHP","IOT","Python","JAVA"];
    var_dump($arr);
    ?>
    <hr/>
    <?php
    //For ecah loop using an array ptint
    foreach($arr as $val)
    {
        echo $val;
        echo "</br>";
    }?>
    <hr/>
    <?php
    //Exachange the index variable value
    $arr[2]="C";
    foreach($arr as $val)
    {
        echo $val;
        echo "</br>";
    }?>
    <hr/>
    <?php
    //count the string
    echo count($arr);
    ?>
    <hr/>
    <?php
    //Under_array in php
    $arr=[];
    $arr[1]=34;
    $arr[3]="Preeti";
    $arr[6]=true;
    $arr[13]=17.5;
    foreach($arr as $val)
    {
        echo $val;
        echo "</br>";
    }
    ?>
    <hr/>
<?php
    $arr[]="This is new value";
    var_dump($arr);
    
    ?>
    <hr/>
    <?php
    //value in index
    $arr[2]="This is new value";
    var_dump($arr);

    ?>
    <?php 
       print_r($arr);?>
</body>
</html>