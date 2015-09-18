<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

$hostname = "205.178.146.115";
$database = "squaretwo";
$username = "square2";
$password = "KMMRUh8t";
$conn = new mysqli($hostname, $username, $password, $database);

$result = $conn->query("SELECT id, title, author, cover, description, link FROM books_test");

$outp = "";
while($rs = $result->fetch_array(MYSQLI_ASSOC)) {
    if ($outp != "") {$outp .= ",";}
    $outp .= '{"title":"'  . $rs["title"] . '",';
    $outp .= '"id":"'  . $rs["id"] . '",';
    $outp .= '"cover":"'  . $rs["cover"] . '",';
    $outp .= '"author":"'  . $rs["author"] . '",';
    $outp .= '"description":"'  . $rs["description"] . '",';
    $outp .= '"link":"'  . $rs["link"] . '"}'; 
}
//$outp ='['.$outp.']';
$outp ='{"books":['.$outp.']}';

$conn->close();

echo($outp);

?>

