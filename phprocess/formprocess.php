<?php
function connect()
{
	$servername="localhost";
	$username="root";
	$password="";
	$dbname="online library";
	$con=mysqli_connect($servername,$username,$password,$dbname);
	if(!$con)
	{
		echo"Connection is failed";
	}
		else 
		{
		echo"Connection is success";
	}
	return $con;
}
function insertrecord($id,$name,$address,$doi,$doe,$som,$tom,$amount)
{
	$con=connect();
	$sql="insert into add membership values('$id','$name','$address','$doi','$doe','$som','$tom','$amount')";
	if(mysqli_query($con, $sql))
	{
		echo"data successfully inserted";
	}
	else 
	{
		echo"data not inserted";
	}
}