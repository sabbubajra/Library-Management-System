<?php
$memberidno=$_POST['Id'];
$bookcode=$_POST['boc'];
$doi=$_POST['doi'];
$doe=$_POST['doe'];

$servername='localhost';
$username='root';
$password='';
$dbname='online library'
		
;
$con=mysqli_connect($servername,$username,$password,$dbname);
if(!$con)
{
	echo"Connection is unsuccessful";
}
else 
{
	echo"Connection is successful";
}

$sql="INSERT INTO issueandreturnofbooks VALUES ('$memberidno','$bookcode','$doi','$doe')";
if(mysqli_query($con, $sql))
{
	echo"Data is inserted";
}
else 
{
	echo"Data is not inserted";
}
?>