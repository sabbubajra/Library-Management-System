<?php
//include 'formprocess.php';
$id=$_POST['id'];
$name=$_POST['name'];
$address=$_POST['address'];
$doi=$_POST['doi'];
$doe=$_POST['doe'];
$som=$_POST['som'];
$tom=$_POST['tom'];
$amount=$_POST['amount'];
//connect();

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
//$con=connect();
//insertrecord($id,$name,$address,$doi,$doe,$som,$tom,$amount);
$sql="INSERT INTO addmembership VALUES('$id','$name','$address','$doi','$doe','$som','$tom','$amount')";
if(mysqli_query($con, $sql))
{
	echo"Data successfully inserted.";
}
else
{
	echo"Data is not inserted successfully.";
}
?>
