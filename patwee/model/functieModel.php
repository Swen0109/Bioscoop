<?php

function getAllSnacks(){
	$conn = openDatabaseConnection();

	$sql = "SELECT * FROM snackbar";
	$statement = $db->prepare($sql);
	$statement->execute();

	$conn = null;

	return $statement->fetchAll();
}

function getAllbezoekers(){
	$conn = openDatabaseConnection();

	$sql = "SELECT * FROM bezoekers";
	$statement = $db->prepare($sql);
	$statement->execute();

	$conn = null;

	return $statement->fetchAll();
}