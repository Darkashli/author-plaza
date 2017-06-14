<?php

require(ROOT . "model/authorModel.php");

function index(){

	render("authors/index", array(
		'authors' => getAllAuthors(),
		
	));
}

function create()
{
	render("authors/create");
}


function createSave()
{
	if (!createAuthor()) {
		header("Location:" . URL . "Error/message");
		exit();
	}

	header("Location:" . URL . "author");
}


function edit($id)
{
	render("authors/edit", array(
		'author' => getAuthor($id)
	));
}


function editSave()
{
	if (!editAuthor()) {
		header("Location:" . URL . "Error/message");
		exit();
	}

	header("Location:" . URL . "author/index");
} 
