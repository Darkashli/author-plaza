<?php

function getAllAuthors() 
{
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM authors";
	$query = $db->prepare($sql);
	$query->execute();

	$db = null;

	return $query->fetchAll();
}

function getAuthor($id) 
{
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM authors WHERE author_id = :id";
	$query = $db->prepare($sql);
	$query->execute(array(
		":id" => $id));

	$db = null;

	return $query->fetch();
}

function createAuthor() 
{
	$name = isset($_POST['name']) ? $_POST['name'] : null;
	$address = isset($_POST['address']) ? $_POST['address'] : null;
	$zipcode = isset($_POST['zipcode']) ? $_POST['zipcode'] : null;
	$city = isset($_POST['city']) ? $_POST['city'] : null;

	
	if (strlen($name) == 0 || strlen($address) == 0 || strlen($zipcode) == 0 || strlen($city) == 0) {
		return false;
	}
	
	$db = openDatabaseConnection();

	$sql = "INSERT INTO authors(author_name, author_address, author_zipcode, author_city) VALUES (:name, :address, :zipcode, :city)";
	$query = $db->prepare($sql);
	$query->execute(array(
		':name' => $name,
		':address' => $address,
		':zipcode' => $zipcode,
	    ':city' => $city));

	$db = null; 

	return true;

}


function editAuthor() 
{
	$name = isset($_POST['name']) ? $_POST['name'] : null;
	$address = isset($_POST['address']) ? $_POST['address'] : null;
	$zipcode = isset($_POST['zipecode']) ? $_POST['zipcode'] : null;
	$city = isset($_POST['city']) ? $_POST['city'] : null;
	
	if (strlen($name) == 0 || strlen($address) == 0 || strlen($zipcode) == 0 || strlen($city)) {
		return false;
	}
	
	$db = openDatabaseConnection();

	$sql = "UPDATE authors SET author_name = :name, author_address = :address, author_zipcode = :zipcode, author_city = :city WHERE author_id = :id";
	$query = $db->prepare($sql);
	$query->execute(array(
		':name' => $name,
		':address' => $address,
		':zipcode' => $zipcode,
		':city' => $city));

	$db = null;
	
	return true;
}
