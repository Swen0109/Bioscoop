<?php

require(ROOT . "model/functieModel.php");

function index()
{
	render("home/index", array('films' => getAllfilms()));	
}


function details($id){
	render("home/details", array('filmInfo' => getFilmsById($id),["id" => $id]));
}