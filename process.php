<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gymguide";
if(isset($_POST)){
$userEmail = $_POST['user_email'];
$userPassword = $_POST['user_password'];
$userName = $_POST['user_name'];
}
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "INSERT INTO user_details (user_email, user_password, user_name)
VALUES ('$userEmail', '$userPassword', '$userName')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>