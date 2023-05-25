<!DOCTYPE html>
<?php
$s=array("Pinki","Preeti","Kirti","Janhvi","Manvi");
$a=array("amita"=>"39","Preeti"=>"34","Akriti"=>03,"Manali"=>29);
?>
<html>
<head>
    <title>Array in php</title>
</head>
<body>


    <?php
    echo "hello $s[0]</br>";
    echo "hello $s[1]</br>";
    echo "hello $s[2]</br>";
    echo "hello $s[3]</br>";
    echo "hello $s[4]</br>";
    ?>
    <?php
    echo "Amita roll no is: ".$a['amita']."</br>";
    echo "Preeti roll no is:". $a['Preeti']."</br>";
    echo "Manali roll no is:". $a['Manali']."</br>"
    ?>
    <?php 
    $a=array("amita"=>"39","Preeti"=>"34","Akriti"=>03,"Manali"=>29);
    for($x=1;$x<=5;$x++){
        echo $x."</br>";
    }
    
    ?>
</body>
</html>