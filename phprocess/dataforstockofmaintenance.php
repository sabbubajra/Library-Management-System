<?php
$bookcode=$_POST['boc'];
$bookname=$_POST['bookname'];
$author=$_POST['author'];
$doa=$_POST['doa'];
$price=$_POST['price'];
$rackno=$_POST['rack'];
$nob=$_POST['nob'];
$subjectcode=$_POST['subjectcode'];
echo $bookcode."<br>".$bookname."<br>".$author."<br>".$doa."<br>".$price."<br>".$rackno."<br>".$subjectcode;

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
echo"<br>";
	//$con=connect();
	//insertrecord($id,$name,$address,$doi,$doe,$som,$tom,$amount);
	$sql="insert into stockmaintenance values ('$bookcode','$bookname','$author','$doa','$price','$rackno','$nob','$subjectcode')";
	if(mysqli_query($con, $sql))
	{
		echo"Data is inserted";
	}
	else
	{
		echo"Data  is not inserted";
	}
	?>