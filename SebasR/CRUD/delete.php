<?php
// Step 1: Connect to the database
$servername = "db";
$username = "db";
$password = "db";
$dbname = "db";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Step 2: Check if the user ID is provided via GET parameter
if(isset($_GET['id'])) {
    $userId = $_GET['id'];

    // Step 3: Prepare and execute the SQL statement to delete the user
    $sql = "DELETE FROM venta WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $userId);
    $stmt->execute();

    // Step 4: Check if the deletion was successful
    if ($stmt->affected_rows > 0) {
        echo "User deleted successfully";
    } else {
        echo "Error: User not found or could not be deleted";
    }

    // Step 5: Close the statement
    $stmt->close();
} else {
    // If no user ID is provided, display an error message
    echo "Error: No user ID provided";
}

// Step 6: Close the connection
$conn->close();
?>
