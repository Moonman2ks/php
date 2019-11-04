<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "one_table_database";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO lentele (vardas, pavarde, amzius, email)
VALUES ('Kestas', 'Kestaitis', '54', 'kestis@gmail.com')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>