	<h1>Edit</h1>
	<form action="<?= URL ?>author/editSave" method="post">
	
		<input type="text" name="name" value="<?= $author['author_name']; ?>">
		<input type="text" name="address" value="<?= $author['author_address']; ?>">
     	<input type="text" name="zipcode" value="<?= $author['author_zipcode']; ?>">
        <input type="text" name="city" value="<?= $author['author_city']; ?>">

		<input type="hidden" name="id" value="<?= $author['author_id']; ?>">
		<input type="submit" value="Edit">
	
	</form>