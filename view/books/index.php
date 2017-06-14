
<head>
	<title>Author Plaza</title>
</head>
<body>
<main>
	
	<header>
		<h1>Books</h1>
		<h3>Ernest Cline</h3>
	</header>
	<nav>
		<ul>
			<li><a href="add.html"><h4>Add book</h4></a></li>
		</ul>
	</nav>
	<table>
		<tr>
		    <th>Id</th>
			<th>Title</th>
			<th>Publisher</th>
			<th>Summary</th>
			<th>Author id</th>

			<th colspan="2">Action</th>
		</tr>
		<tr><?php foreach ($books as $book) { ?>
		<tr>
			<td><?= $book['book_id']; ?></td>
			<td><?= $book['book_title']; ?></td>
			<td><?= $book['book_publisher']; ?></td>
			<td><?= $book['book_summary']; ?></td>
			<td><?= $book['author_id']; ?></td>

		
		</tr>
		<?php } ?>
	</table>
	<footer>&copy; by Da Vinci College</footer>
</main>

</body>