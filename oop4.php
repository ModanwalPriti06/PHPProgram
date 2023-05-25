<?php
class Calculator{
	public $a;
	public $b;
	public $c;
function add(){
		echo ($this->a+$this->b);
	}
}
class math extends Calculator{
	function add(){
		echo "Addition of two no".($this->a+$this->b+$this->c);
	}
}
$m=new math();
$m->a=10;
$m->b=32;
$m->c=24;
$m->add();
?>