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
	render("books/create");
}


function createSave()
{
	if (!createBook()) {
		header("Location:" . URL . "Error/message");
		exit();
	}

	header("Location:" . URL . "book/index");
}


function edit($id)
{
	render("books/edit", array(
		'book' => getBook($id),
	));
}


function editSave()
{
	if (!editBook()) {
		header("Location:" . URL . "Error/message");
		exit();
	}

	header("Location:" . URL . "book/index");
} 

function delete($id)
{
	if (!deleteBook($id)) {
		header("Location:" . URL . "Error/message");
		exit();
	}

		header("Location:" . URL . "book/index");
}