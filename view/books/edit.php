<body>
<main>
	<h1>Edit</h1>
	<table>
	<form action="<?= URL ?>book/editSave" method="post">
		<tr><input type="text" name="title" value="<?= $book['book_title']; ?>"></tr>
		<tr><input type="text" name="publisher" value="<?= $book['book_publisher']; ?>"></tr>
     	<tr><input type="text" name="summary" value="<?= $book['book_summary']; ?>"></tr>
        <tr><input type="text" name="authorId" value="<?= $book['author_id'] ?>"></tr>

		<input type="hidden" name="id" value="<?= $book['book_id']; ?>">
		<tr><input type="submit" value="Edit"></tr>
	</table>
	
	</form>
</main>
<footer>&copy; by Da Vinci College</footer>
</body>