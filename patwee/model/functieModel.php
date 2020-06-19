<?php

function getAllSnacks(){
	$conn = openDatabaseConnection();

	$sql = "SELECT * FROM snackbar";
	$statement = $conn->prepare($sql);
	$statement->execute();

	$conn = null;

	return $statement->fetchAll();
}

function getAllbezoekers(){
	$conn = openDatabaseConnection();

	$sql = "SELECT * FROM bezoekers";
	$statement = $conn->prepare($sql);
	$statement->execute();

	$conn = null;

	return $statement->fetchAll();
}