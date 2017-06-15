	<body>
	  <main>
	<h1>Edit</h1>
	<table>
	<form action="<?= URL ?>author/editSave" method="post">
	
		<tr><input type="text" name="name" value="<?= $author['author_name']; ?>"></tr>
		<tr><input type="text" name="address" value="<?= $author['author_address']; ?>"></tr>
     	<tr><input type="text" name="zipcode" value="<?= $author['author_zipcode']; ?>"></tr>
        <tr><input type="text" name="city" value="<?= $author['author_city']; ?>"></tr>

		<input type="hidden" name="id" value="<?= $author['author_id']; ?>">
		<tr><input type="submit" value="Edit"></tr>
	</table>
	
	</form>
	</main>
<footer>&copy; by Da Vinci College</footer>

	</body>