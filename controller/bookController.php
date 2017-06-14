<?php 

require(ROOT . "model/bookModel.php");

function index()
{
	render("books/index", array(
		'books' => getAllBooks(),
		
	));
}




function create()
{
	render("create");
}


function createSave()
{
	if (!createBook()) {
		header("Location:" . URL . "Error/message");
		exit();
	}

	header("Location:" . URL . "book");
}