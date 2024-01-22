<?php
$servername = "localhost";
$username = "autosewa_techxbusiness";
$password = "Nick@2021";
$database = "autosewa_techxbusiness";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_name = $_POST["fname"];
    $last_name = $_POST["lname"];
    $phone_number = $_POST["pnumber"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Insert data into the database
    $sql = "INSERT INTO Contact_formSubmit (fname, lname, pnumber, email, message)
            VALUES ('$first_name', '$last_name', '$phone_number', '$email', '$message')";
     
    if ($conn->query($sql) === TRUE) {
        echo "Record inserted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the database connection
$conn->close();
?>

