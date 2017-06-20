
<head>
	<title>Author Plaza</title>
</head>
<body>
  <main>
	
	<header>
		<h1>Authors</h1>
	</header>
   
	<li><a href="<?= URL ?>author/create">Add an author</a></li>
   
 </main>
	
	<table>
		<tr>
		    <th>Id</th>
			<th>Name</th>
			<th>Address</th>
			<th>Zipcode</th>
			<th>City</th>
			<th colspan="2">Action</th>
		</tr>
<?php 
	foreach($authors as $author){
?>
	<tr>
		<td><?php echo $author['author_id']; ?></td>
		<td><?php echo $author['author_name']; ?></td>
		<td><?php echo $author['author_address']; ?></td>
        <td><?php echo $author['author_zipcode']; ?></td>
        <td><?php echo $author['author_city']; ?></td>
        <td><a href="<?= URL ?>author/edit/<?= $author['author_id'] ?>">edit</a></td>.               	
        <td><a href="<?= URL ?>author/delete/<?= $author['author_id'] ?>">delete</a></td>
	</tr>

<?php																			
	} 
?>

</table>
	
<footer>&copy; by Da Vinci College</footer>
</body>