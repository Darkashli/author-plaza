<?php

function getAllBooks() 
{
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM books";
	$query = $db->prepare($sql);
	$query->execute();

	$db = null;

	return $query->fetchAll();
}


function getBook($id) 
{
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM books WHERE book_id = :id";
	$query = $db->prepare($sql);
	$query->execute(array(
		":id" => $id));

	$db = null;

	return $query->fetch();
}


function createBook() {
	$title = isset($_POST['title']) ? $_POST['title'] : null;
	$publisher = isset($_POST['publisher']) ? $_POST['publisher'] : null;
	$summary = isset($_POST['summary']) ? $_POST['summary'] : null;
	$authorId = isset($_POST['authorId']) ? $_POST['authorId'] : null;

	
	if (strlen($title) == 0 || strlen($publisher) == 0 || strlen($summary) == 0 || strlen($authorId) == 0) {
		return false;
	}
	
	$db = openDatabaseConnection();

	$sql = "INSERT INTO books(book_title, book_publisher, book_summary, author_id) VALUES (:title, :publisher, :summary, :authorId)";
	$query = $db->prepare($sql);
	$query->execute(array(
		':title' => $title,
		':publisher' => $publisher,
		':summary' => $summary,
		':authorId' => $authorId));

	$db = null;
	
	return true;
}


function editBook() 
{
	
	$name = isset($_POST['name']) ? $_POST['name'] : null;
	$address = isset($_POST['address']) ? $_POST['address'] : null;
	$zipcode = isset($_POST['zipcode']) ? $_POST['zipcode'] : null;
	$city = isset($_POST['city']) ? $_POST['city'] : null;
	$id = isset($_POST['id']) ? $_POST['id'] : null;
	
	if (strlen($name) == 0 || strlen($address) == 0 || strlen($zipcode) == 0 || strlen($city) == 0) {
	
		return false;
	}
	
	$db = openDatabaseConnection();

	$sql = "UPDATE books SET book_title = :title, book_publisher = :publisher, book_summary = :summary, author_city = :city WHERE author_id = :id";
	$query = $db->prepare($sql);
	$query->execute(array(
		':name' => $name,
		':address' => $address,
		':zipcode' => $zipcode,
		':city' => $city,
		':id' => $id));

	$db = null;
	
	return true;
}

function deleteBook($id) 
{
	if (!$id) {
		return false;
	}
	
	$db = openDatabaseConnection();

	$sql = "DELETE FROM books WHERE book_id=:id ";
	$query = $db->prepare($sql);
	$query->execute(array(
		':id' => $id));

	$db = null;
	
	return true;
}