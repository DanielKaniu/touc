<?php
//
//Determine the time the server is on before it times the user out.
ini_set ( 'max_execution_time', 1200);
//
//This file houese the credentials that connect an application to the database.
//
//Properties of the serverside connection to the database.
$host = "localhost";
$user = "root";
$password = "";
$db_name = "toucan";
//
//Establish connection to database.
$dsn = 'mysql:host=' . $host . ';dbname=' . $db_name;
$pdo = new PDO($dsn, $user, $password);
//
//Set a pdo error handler.
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);