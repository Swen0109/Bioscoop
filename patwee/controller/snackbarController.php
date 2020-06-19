<?php

require(ROOT . "model/functieModel.php");

function index()
{
	render("snackbar/index", array('snacks' => getAllSnacks()));
}
