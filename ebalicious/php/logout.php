<?php
session_start(); // start session

// Destroy session
session_unset();
session_destroy();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logged Out</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f7f7f7;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .logout-container {
            background-color: #fff;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
            text-align: center;
            max-width: 400px;
            width: 100%;
        }

        h1 {
            font-size: 2rem;
            color: #333;
            margin-bottom: 1.5rem;
        }

        p {
            font-size: 1.2rem;
            color: #666;
            margin-bottom: 2rem;
        }

        a.button {
            display: inline-block;
            padding: 0.8rem 1.5rem;
            background-color: #5cb85c;
            color: white;
            border-radius: 5px;
            text-decoration: none;
            font-size: 1rem;
            transition: background-color 0.3s ease;
        }

        a.button:hover {
            background-color: #4cae4c;
        }

    </style>
</head>
<body>
    <div class="logout-container">
        <h1>You’ve Been Logged Out</h1>
        <p>Thank you for visiting! You have been successfully logged out.</p>
        <a href="../index.html" class="button">Login Again</a>
    </div>
</body>
</html>
