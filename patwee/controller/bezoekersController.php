<?php

require(ROOT . "model/functieModel.php");

function index()
{
	render("bezoekers/index", array('bezoekers' => getAllbezoekers()));
}
