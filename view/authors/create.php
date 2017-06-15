<body>
<main>
<header>
		<h1>Add</h1>
</header>

<table>
  <tr>
	<form action="<?= URL ?>author/createSave" method="post">
	
		<td><input type="text" name="name" placeholder="name"></td>
		<td><input type="text" name="address" placeholder="address"></td>
		<td><input type="text" name="zipcode" placeholder="zipcode"></td>
		<td><input type="text" name="city" placeholder="city"><td>

		<input type="submit" value="create">
	</form>
  </tr>
</table>
<footer>&copy; by Da Vinci College</footer>
<main>
</body>
