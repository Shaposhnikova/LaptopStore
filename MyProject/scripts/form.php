<?php
require 'connect.php';
require 'page.html';

$link = mysqli_connect("localhost", "root", "", "demo");

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$model = $_POST['model'];
$screenSize = $_POST['screenSize'];
$ramSize = $_POST['ramSize'];


$sql = "INSERT INTO gadget (model, screenSize, ramSize)
VALUES ('{$model}', '{$screenSize}','{$ramSize}');";

if ($link->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $link->error;
}

$sql = "SELECT model, screenSize, ramSize FROM gadget";
$result = $link->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "model: " . $row["model"]. " - screenSize: " . $row["screenSize"]. " " . $row["ramSize"]. "<br>";
    }
} else {
    echo "0 results";
}
$link->close();
?>
