<?php
class calsi{
	public $a=30;
	public $b=3;
	function add(){
		echo $this->a+$this->b."</br>";
	}
	function sub(){
		$c=$this->a-$this->b;
		echo $c;
	}
}
    $cal=new calsi();
	$cal->add();
	$cal->sub();
?>