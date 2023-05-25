<?php
class math{
	
	public function __call($funcname,$args)
	{
		
	if($funcname=="add")
	{
		switch(count($args)){
			case 1:
			echo $args[0]+$args[0];
			break;
			case 2:
			echo $args[0]+$args[1];
			break;
			case 3:
			echo $args[0]+$args[1]+$args[2]+$args[3];
			break;
		}
	}
}
	function msg()
	{
	echo "this is seconfd fun";
	}
}
$m=new math();
$m->add(5,6);
$m->msg();
?>