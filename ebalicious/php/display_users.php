<?php
include 'db_connect.php';

// Check connection and handle errors securely
if ($conn->connect_error) {
    error_log("Database connection failed: " . $conn->connect_error);
    die("Connection failed: Please try again later.");
}

header('Content-Type: text/html; charset=utf-8');

// Prepare and execute query
$stmt = $conn->prepare("SELECT user_id, name, email, message, created_at FROM users");
$stmt->execute();
$result = $stmt->get_result();

if ($result === false) {
    error_log("Query failed: " . $conn->error);
    die("Query failed: Please try again later.");
}

// Styles for the table and button
echo '<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #6da5ed;
        color: #333;
        margin: 20px;
        padding: 20px;
    }

    table {
        width: 100%;    
        border-collapse: collapse;
        margin: 20px 0;
        background-color: #f4f4f4;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    th, td {
        padding: 12px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }

    th {
        background-color: cyan;
        color: black;
    }

    .button {
        display: inline-block;
        padding: 10px 20px;
        margin: 20px 0;
        background-color: #5cb85c;
        color: white;
        text-decoration: none;
        border-radius: 5px;
        font-size: 1rem;
        transition: background-color 0.3s ease;
    }

    .button:hover {
        background-color: #4cae4c;
    }

</style>';

// Display the table if there are results
if ($result->num_rows > 0) {
    echo "<table>";
    echo "<tr>
            <th>User ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Message</th>
            <th>Created At</th>
          </tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . htmlspecialchars($row['user_id'], ENT_QUOTES, 'UTF-8') . "</td>";
        echo "<td>" . htmlspecialchars($row['name'], ENT_QUOTES, 'UTF-8') . "</td>";
        echo "<td>" . htmlspecialchars($row['email'], ENT_QUOTES, 'UTF-8') . "</td>";
        echo "<td>" . htmlspecialchars($row['message'], ENT_QUOTES, 'UTF-8') . "</td>";
        echo "<td>" . htmlspecialchars($row['created_at'], ENT_QUOTES, 'UTF-8') . "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "No results found.";
}

// Close the connection
$conn->close();
?>

<!-- Button to go back to the home page -->
<a href="../index.html" class="button">Go Back to Home</a>
