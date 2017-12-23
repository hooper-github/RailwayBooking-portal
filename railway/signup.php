<?php
$x=$_POST['a'];
$y=$_POST['b'];
$z=$_POST['c'];
$m=$_POST['d'];

if(empty($x) || empty($y) || empty($z) || empty($m))
echo "Data Incomplete.!!";
else 
{
	mysql_connect("localhost","root","");
	mysql_select_db("irctc");
	$q="SELECT * FROM users WHERE name='$x'";	
	$result=mysql_query($q);
	$count=mysql_num_rows($result);
		if($count!=0)
			echo "Username unavailable.!!";
		else
		{ 
			$query="INSERT INTO users (name,email,password,phone) VALUES ('$x','$y','$z','$m')";
			mysql_query($query);
			echo "Account created successfully.!!";	
			echo "Click <a href='form.php'>here</a> to Login.";
		}
		}
		
?>