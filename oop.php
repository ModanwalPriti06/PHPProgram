<?php
class Cars{
    public $color,$name;
    function carColor($c){
        $this->color=$c;
    }
    function carName($n){
        $this->name=$n;
    }
   
}
$h1=new Cars();
$h1->carColor("red");
$h1->carNAme("Enjoy");
echo "Color name:".$h1->color."</br>";
echo "Name of car:".$h1->name."</br>";
$h2=new Cars();
$h2->carColor("Black");
$h2->carNAme("Bolero");
echo "Color name:".$h2->color."</br>";
echo "Name of car:".$h2->name;
?>