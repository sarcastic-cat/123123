<?php
include ('db_connect.php');
// Ensure the database connection is using UTF-8 encoding
$conn->set_charset("utf8mb4");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];


    //Patterns that are allowed to be inputted
    $namePattern = "/^[a-zA-Z0-9\s,\'\-]*$/";
    $messagePattern = "/^[a-zA-Z0-9\s,\'\-?!@.]*$/";



    //Check the inputted text for code injection and displays an alert when found
    if (!preg_match($namePattern, $name)) {
        echo "<script>
            alert('Error: Code injection is detected on the name.');
            window.location.href = '../index.html';
        </script>";
        exit(); 
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<script>
            alert('Error: Code injection is detected on the message.');
            window.location.href = '../index.html';
        </script>";
        exit();
    }
    if (!preg_match($messagePattern, $message)) {
        echo "<script>
            alert('Error: Code injection is detected on the message.');
            window.location.href = '../index.html';
        </script>";
        exit();
    }
    

    // Sanitize inputs (just in case)
    $name = trim(htmlspecialchars($name, ENT_QUOTES, 'UTF-8'));
    $email = trim(htmlspecialchars($email, ENT_QUOTES, 'UTF-8'));
    $message = trim(htmlspecialchars($message, ENT_QUOTES, 'UTF-8'));

    // Use a prepared statement to avoid SQL injection
    $stmt = $conn->prepare("INSERT INTO users (name, email, message) VALUES (?, ?, ?)");
    if ($stmt === false) {
        error_log("SQL Prepare failed: " . $conn->error);
        echo "Error preparing the statement.";
        exit();
    }

    //Limits the string that is in the code, prevents any unknown addition of strings
    $stmt->bind_param("sss", $name, $email, $message); 

    if ($stmt->execute()) {
        header("Location: Thank-you_message.php");
        exit();
    } else {
        error_log("SQL Error: " . $stmt->error);
        echo "Error: Something went wrong while inserting the data.";
    }

    $stmt->close();
    $conn->close();
} else {
    echo "Invalid request method";
}
?>

