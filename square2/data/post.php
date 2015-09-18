<?php
//include('connector.php');
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

$hostname = "205.178.146.115";
$database = "squaretwo";
$username = "square2";
$password = "KMMRUh8t";
$conn = new mysqli($hostname, $username, $password, $database);



/********************* Form Submit *********************/
	
	$title = $_POST["book_title"];
	$author = $_POST["book_author"];
	$description = $_POST["book_description"];
	$cover = $_POST["book_cover"];
	$publisher = "Antiquated Media LLC";
	
	$min = 1;
	$max = 3;
	$randno = rand ( $min , $max );
	
	$link = "documents/book_" . $randno . ".pdf";
	
	
	$sql = "INSERT INTO books_test (id, title, author, cover, description, link, publisher)
	VALUES (NULL, '$title', '$author', '$cover', '$description', '$link', '$publisher')";
	
	if ($conn->query($sql) === TRUE) {
		echo "New record created successfully";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
	
	//$conn->close();   
?>
