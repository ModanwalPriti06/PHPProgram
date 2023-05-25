<?php
$username="root";
$password="";
$dns='mysql:host=localhost;dbname=student';
try{
$var1= new PDO($dns,$username,$password);
echo "connected: </br>";
//Insertdata in sql database
$id="6";
$name="Priyambada";
$query = "Insert into student(ID,Name) Values ('$id','$name')";
$var2=$var1->prepare($query);
$var3=$var2->execute();
?>
<button onclick="alert('row executed')">Insert</button>
<button onclick="alert('Delete row')">Delete</button>
<?php
}
catch(Exception $e)
{
    $var5= $e->getMessage();
    echo "<p>Connection Failed: $var5</p>";
}
?>