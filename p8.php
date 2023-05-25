<?php
	 class calculator{
		 function add()  //No return type no passing parameter
		 {
			 $a=10;
			 $b=20;
			 $add=$a+$b;
			 echo "Addition is: ".$add."</br>";
		 }
		 function sub()
		 {
			 $a=70;
			 $b=20;
			 $sub=$a-$b;
			 echo "subtracation is: ".$sub."</br>";
		 }
		 function multi()
		 {
			 $a=10;
			 $b=20;
			 $multi=$a*$b;
			 echo "Addition is: ".$multi."</br>";
		 }
		 function div()
		 {
			 $a=2;
			 $b=20;
			 $div=$a/$b;
			 echo "Addition is: ".$div."</br>";
		 }
		 }
		 $cal =new calculator();
		 $cal->add();
		 $cal->sub();
		 $cal->multi();
		 $cal->div();
		 
		 	 
?>