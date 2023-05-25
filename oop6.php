<?php
class areas{
	public function __call($fun,$args)
	{
		if($fun=="area")
		{
			switch(count($args)){
				case 1:
			    $a=3.14*$args[0]*$args[0];
			    echo "area of circle = $a";
				break;
				case 2:
				$a=$args[0]*$args[1];
				echo "Area of rectangle = ".$a;
				break;
			}
		}
	}
}
$m=new areas();
$m->area(5,8);
?>