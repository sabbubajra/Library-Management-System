<html>
<head>
<link rel="stylesheet" type="text/css" href="css/stylemember.css">
<title>Add membership</title>
</head>
<body>
<div class="pink">
<h1>MEMBERSHIP</h1>

<form action="phprocess/datafrommember.php" method="post">
<table>
<tr>
<td><label for="Idno">Idno</label></td>
<td><input type="text" name="id"></td>
<td><label for="Name">Name</label></td>
<td><input type="text" name="name"></td>
</tr>


<tr>
<td><label for="Address">Address</label></td>
<td><input type="text" name="address"></td>
<td><label for="Date of Issue">Date of Issue</label></td>
<td><input type="date" name="doi"></td>
</tr>

<tr>
<td><label for="Date of Expiry">Date of Expiry</label></td>
<td><input type="date" name="doe"></td>
<td><label for="Status of Mem">Status of Mem</label></td>
<td><input type="text" name="som"></td>
</tr>

<tr>
<td><label for="Type of Mem">Type of Mem</label></td>
<td><input type="text" name="tom"></td>
<td><label for="Amount">Amount</label></td>
<td><input type="text" name="amount"></td>
</tr>
</table>
<button type="submit">Add</button>
</form>
</div>
</body>
</html>
