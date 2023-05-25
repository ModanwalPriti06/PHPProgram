<?php
//============Return type no parameter=======================================================
/* 
	class calculator{
		 function add()  //No return type no passing parameter
		 {
			 $a=10;
			 $b=20;
			 return $a+$b."</br>";
		 }
	}
	$cal= new calculator();
     echo $cal->add();
	     //or
     $r=$cal->add();
	 echo $r;	 
*/
//==================================No return type passing parameter=================================
/*class calculator{
		 function add($a,$b)  
		 {
			 echo $a.$b."</br>";	 
		 }
	}
	$cal= new calculator();
     $cal->add(17,56);
     $cal->add("My name is ","Gippy");
*/
//================================Return Type with parameter=======================================
class calculator{
		 function add($a,$b,$c)  
		 {
			 return $a+$b+$c;	 
		 }
	}
	$cal= new calculator();
     $res=$cal->add(46,57,37);
     echo $res;

?>
	
	