<html>
<head>
<link rel="stylesheet" type="text/css" href="css/maintenance.css">
<title>Add boooks</title>
</head>
<body>
<div class="pink">
<h1>STOCK MAINTENANCE</h1>
<form action="phprocess/dataforstockofmaintenance.php" method="post">

<table>
<tr>
<td><label for="Idno">Book Code</label></td>
<td><input type="number" name="boc"></td>
<td><label for="BookCode">Book Name</label></td>
<td><input type="text" name="bookname"></td>
</tr>


<tr>
<td><label for="Author">Author</label></td>
<td><input type="text" name="author"></td>
<td><label for="Date of Arrival">Date of Arrival</label></td>
<td><input type="date" name="doa"></td>
</tr>

<tr>
<td><label for="Price">Price</label></td>
<td><input type="number" name="price"></td>
<td><label for="Rackno">Rack no</label></td>
<td><input type="number" name="rack"></td>
</tr>

<tr>
<td><label for="Number of Books">Number of Books</label></td>
<td><input type="number" name="nob"></td>
<td><label for="Subject Code">Subject Code</label></td>
<td><input type="number" name="subjectcode"></td>
</tr>
</table>
<button type="submit" value="submit">Add</button>
</form>

</div>
</body>
</html>

