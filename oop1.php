<?php
class detail{
	function __construct($name,$age)
	{
		 echo "my name is juhi mishra<br/>";
		 echo "my name is $name<br/>";
		 echo "my name is $age<br/>";
	}
	function education()
	{
		echo "I am passed 10th with 82%<br/>";
		echo "I am passed 12th with 88%";
	}
}
$d= new detail("preeti",17);
$d->education();
?>