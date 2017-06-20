
<head>
	<title>Author Plaza</title>
</head>
<body>
  <main>
	
	<header>
		<h1>Books</h1>
		<h3>Ernest Cline</h3>
	</header>
	
	   <li><a href="<?= URL ?>book/create">Add an book</a></li>
		
  </main>
	<table>
		<tr>
		    <th>Id</th>
			<th>Title</th>
			<th>Publisher</th>
			<th>Summary</th>
			<th>Author id</th>

			<th colspan="2">Action</th>
		
		<?php foreach ($books as $book) { 
		?>
		<tr>
			<td><?= $book['book_id']; ?></td>
			<td><?= $book['book_title']; ?></td>
			<td><?= $book['book_publisher']; ?></td>
			<td><?= $book['book_summary']; ?></td>
			<td><?= $book['author_id']; ?></td>
			<td><a href="<?= URL ?>book/edit/<?= $book['book_id'] ?>">edit</a></td>             	
            <td><a href="<?= URL ?>book/delete/<?= $book['book_id'] ?>">delete</a></td>		
        </tr>
		<?php } ?>
	</table>
	<footer>&copy; by Da Vinci College</footer>


</body>