<?php
//============================just like an example=========================
class db{
function __construct()
{
	$con=mysqli_connect('localhost','root','','miniproject');
	echo "hello";
}
function insert($query)
{
		 $res=mysqli_query($con,$query);
		 if($res==true)
			 return 1;
		 else
			 return 0;
}
}
$d=new db();

?>