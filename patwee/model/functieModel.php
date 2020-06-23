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

function getAllfilms(){
	$conn = openDatabaseConnection();

	$sql = "SELECT * FROM films";
	$statement = $conn->prepare($sql);
	$statement->execute();

	$conn = null;

	return $statement->fetchAll();
}

function getAllreserveringen(){
	$conn = openDatabaseConnection();

	$sql = "SELECT * FROM reservering";
	$statement = $conn->prepare($sql);
	$statement->execute();

	$conn = null;

	return $statement->fetchAll();
}

function createbezoeker($naam, $leeftijd, $telNummer){
    $conn=openDatabaseConnection();
    $statement=$conn->prepare("INSERT INTO bezoekers (naam, leeftijd, telNummer) VALUES (:naam, :leeftijd, :telNummer)");
    $statement->bindParam(":naam" , $naam);
	$statement->bindParam(":leeftijd" , $leeftijd);
	$statement->bindParam(":telNummer" , $telNummer);
    $statement->execute();
}