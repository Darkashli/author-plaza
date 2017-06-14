
<head>
	<title>Author Plaza</title>

</head>
<body>
<main>
	
	<header>
		<h1>Authors</h1>
	</header>
	<table>

		<a href="<?= URL ?>author/create">Add</a>

		<tr>
		    <th>Id</th>
			<th>Name</th>
			<th>Address</th>
			<th>Zipcode</th>
			<th>City</th>
			<th>Action</th>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
		</tr>
	</table>
</main>
<br>
	<table>
<?php 
	foreach($authors as $author){
?>
	<tr>
		<td><?php echo $author['author_id']; ?></td>
		<td><?php echo $author['author_name']; ?></td>
		<td><?php echo $author['author_address']; ?></td>
        <td><?php echo $author['author_zipcode']; ?></td>
        <td><?php echo $author['author_city']; ?></td>
        <td><a href="<?php echo URL ?>author/edit/<?= $author['author_id']; ?>">edit</a></td>
<!--         <td><a href="<?= URL ?>student/edit/<?= $student['student_id'] ?>">Edit</a></td>
 -->

	</tr>
<?php																			
	} 
?>
	</table>
<footer>&copy; by Da Vinci College</footer>
</body>