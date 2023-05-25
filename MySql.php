<?php
$query = "select * from student";
$username="root";
$password="";
$dns='mysql:host=localhost;dbname=student';
try{
$var1= new PDO($dns,$username,$password);
$var2=$var1->prepare($query);
$var2->execute();
while($var3=$var2->fetch()){
    echo "Id is :".$var3['ID']."</br>";
    echo "Name is :".$var3['Name']."</br>";
}
}
catch(Exception $e)
{
    $var5= $e->getMessage();
    echo "<p>Error msg is: $var5</p>";
}
?>
