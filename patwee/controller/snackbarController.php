<?php

require(ROOT . "model/functieModel.php");

function index()
{
	render("snackbar/index", array('snacks' => getAllSnacks()));
}

function details($id){
	render("snackbar/detail", array('snack' => getSnacksById($id), ["id" => $id]));
}
