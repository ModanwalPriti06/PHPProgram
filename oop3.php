<?php
class calculator{
public $a;
public $b;
function add(){
echo $this->a+$this->b;
}
}
class math extends calculator{
function pow(){
echo "power is: ".($this->a*$this->a);
}
}
$m= new math();
$m->a=10;
$m->pow();
?>