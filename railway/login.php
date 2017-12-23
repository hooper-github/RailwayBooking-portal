<?php
session_start();
$x=$_POST['x'];
$y=$_POST['y'];

if(empty($x) || empty($y))
echo "Data Incomplete.!!";
else 
{
	mysql_connect("localhost","root","");
	mysql_select_db("irctc");
	$q="SELECT * FROM users where name='$x' and password='$y'";	
	$result=mysql_query($q);
	$count=mysql_num_rows($result);
		if($count==0)
			echo "No Records found.!!";
		else
			{
			$_SESSION['name']=$x;
			header ("location:welcome.php");
			}
}		
?>