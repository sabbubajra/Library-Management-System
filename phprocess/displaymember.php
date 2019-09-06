<?php
$servername="localhost";
$username="root";
$password="";
$dbname="online library";

$con=mysqli_connect($servername,$username,$password,$dbname);
if(!$con)
{
	echo"Connection is unsuccessful";
}
else 
{
	echo"Connection is success";
}


?>


<html>
<head>
<title>Display Member</title>
</head>
<body>
<table border=1>
<thead>
<tr>
<th>Idno</th>
<th>Name</th>
<th>Address</th>
<th>Date of Issue</th>
<th>Date of Expiry</th>
<th>Status of Member</th>
<th>Type of Member</th>
<th>Amount</th>
</tr>
</thead>
<tbody>
<?php 
$sql="SELECT *FROM addmembership";
$result=mysqli_query($con, $sql);
if(mysqli_num_rows($result)>0){
	while($row=mysqli_fetch_assoc($result))
	{
		/*echo $row["Idno"].$row["Name"].$row["Address"].$row["Date of Issue"].$row["Date of Expiry"].$row["Status of Member"].$row["Type of Member"].
		$row["Amount"]."<br>";*/
echo"<tr>";
echo"<td>".$row["Idno"]."</td>";
echo"<td>".$row["Name"]."</td>";
echo"<td>".$row["Address"]."</td>";
echo"<td>".$row["Date of Issue"]."</td>";
echo"<td>".$row["Date of Expiry"]."</td>";
echo"<td>".$row["Status of Member"]."</td>";
echo"<td>".$row["Type of Member"]."</td>";
echo"<td>".$row["Amount"]."</td>";
echo "</tr>";
}
}
else 
{
	echo"No results";
}
?>
 </tbody>
 </table>
</body>
</html>
