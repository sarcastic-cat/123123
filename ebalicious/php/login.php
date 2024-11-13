<?php
session_start();

//Include database connection
include 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $username = $_POST['username'];
    $password = $_POST['password'];

    //Check if user exists in the database
    $sql = "SELECT * FROM admin WHERE username = ?";
    $stmt = $conn->prepare($sql);

    if ($stmt)
    {
        $stmt->bind_param("s",$username);
        $stmt->execute();
        $result = $stmt->get_result();
        $admin = $result->fetch_assoc(); 

        if ($admin && password_verify($password,$admin['password']))
        {
            //Store user info in session
            $_SESSION['userid'] = $admin['userid'];
            $_SESSION['username'] = $admin['username'];

            //Redirect user to a welcome page or dashboard
            header("location: dashboard.php");
            exit(); //Stop script execution after redirection
        }
        else
        {
            echo "Invalid username or password";
        }
    }
    else
    {
        echo "Error preparing statement: " . $conn->error;
    }
}

$conn->close();
?>





