<html>
<head>
<link rel="stylesheet" type="text/css" href="css/issue.css">
<title>Issue of Books</title>
</head>
<body>
<div class="pink">
<h1>ISSUE OF BOOKS</h1>

<form action="phprocess/datafromissueandreturnofbook.php" method="post">
<table>
<tr>
<td><label for="MemberIdno">Member Idno</label></td>
<td><input type="number" name="Id"></td>
<td><label for="Name">Book Code</label></td>
<td><input type="text" name="boc"></td>
</tr>


<tr>
<td><label for="Address">Date of Issue</label></td>
<td><input type="date" name="doi"></td>
<td><label for="Date of Issue">Date of Expiry</label></td>
<td><input type="date" name="doe"></td>
</tr>


</table>
<button type="submit">Add</button>
</form>

</div>
</body>
</html>

