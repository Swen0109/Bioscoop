<?php

require(ROOT . "model/functieModel.php");

function index()
{
	render("home/index", array('films' => getAllfilms()));	
}