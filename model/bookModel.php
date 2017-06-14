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


function createBook() 
{
	$title = isset($_POST['title']) ? $_POST['title'] : null;
	$publisher = isset($_POST['publisher']) ? $_POST['publisher'] : null;
	$summary = isset($_POST['summary']) ? $_POST['summary'] : null;
	
	if (strlen($title) == 0 || strlen($publisher) == 0 || strlen($summary) == 0) {
		return false;
	}
	
	$db = openDatabaseConnection();

	$sql = "INSERT INTO books(book_title, book_publisher, book_summary) VALUES (:title, :publisher, :summary)";
	$query = $db->prepare($sql);
	$query->execute(array(
		':title' => $title,
		':publisher' => $publisher,
		':summary' => $summary));

	$db = null;
	
	return true;
}