
<?php
//Find info of php
//phpinfo();
//Current date and time find in php function
$output=`date`;
echo $output;
echo "</br>";
//echo function
echo 1234.4568273;
echo "</br>";
//sum of two num
$a=1;
$b=2;
echo "A value is:",$a,"</br>";
echo "B value is:",$b,"</br>";
echo "The sum of two num is:",$a+$b,"</br>";
//Operater
$a=2;
$a +=56;
echo "$a";
echo "</br>";
//for loop
for($a=2, $b=3; $a<10 && $b<10; $a++, $b++)
{
    echo "$a","\t","$b";
    echo "</br>";
}
//if loop
$a=10;
if($a==10){
    echo "a is equal to 10</br>";
    //shift left and shift right operator
    $f=10;
    $s=2;
    $res=$f>>$s;// divided by 2 
    echo $res,"</br>";
    $res=$f<<$s;//multiply by two according to shift number
    echo $res;
}

?>
