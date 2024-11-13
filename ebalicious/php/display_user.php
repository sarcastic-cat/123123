<?php
include 'db_connect.php';
 
//check connection
if(!$conn){
    die("Connection Error: " . mysqli_connection_error());
}

header('content-Type: text/plain; charset-utf-8');

$sql = "SELECT user_id, name, email, messsage, create_at FROM users";
$result = $conn->query($sql);

if(!$result) {
    die("Query failed: " . $conn->error);
}

if($result->num_rows > 0){
    echo"<table>";
    echo"<tr><th>User ID</th><th>Name</th><th>Email</th><th>Message</th><th>Created At</th></tr>";
    while($row = $result->fetch_assoc()){
        echo "<tr>";
        echo "<td>" . $row["user_id"] . "</td>";
        echo "<td>" . $row["name"] . "</td>";
        echo "<td>" . $row["email"] . "</td>";
        echo "<td>" . $row["message"] . "</td>";
        echo "<td>" . $row["create_at"] . "</td>";
        echo "</tr>"; //separator between users
    }
    echo"</table>";
} else {
    echo "No results found.";
}

$conn->close();
?>