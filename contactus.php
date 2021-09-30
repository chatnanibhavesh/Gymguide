<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gymguide";

if(isset($_POST))
{
$Name = $_POST['user_name'];
$Email = $_POST['user_email'];
$Message = $_POST['user_message'];
}


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO contactus (user_name, user_email, user_message)
VALUES ('$Name', '$Email', '$Message')";

if ($conn->query($sql) === TRUE) {
    echo "Thank you for your valuable feedback! We will get back to you as soon as possible.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
