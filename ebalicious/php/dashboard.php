<?php
session_start(); 

// Check if the user is logged in
include 'db_connect.php';

if (!isset($_SESSION['userid'])) {
    header("Location: login.php");
    exit();
}

echo "<h1>Admin Mode, " . $_SESSION['username'] . "!</h1>";
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Website with Navigation</title>
    <link rel="stylesheet" href="styles.css">
</head>
<style>
    /* General Reset */
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    /* Body and Font Styling */
    body {
        font-family: 'Helvetica Neue', sans-serif;
        line-height: 1.6;
        background-color: #f4f7fa;
        color: #333;
    }

    /* Navigation Bar Styling */
    nav {
        background-color: #1e2a3a;
        color: white;
        padding: 15px 0;
        position: fixed;
        width: 100%;
        top: 0;
        left: 0;
        z-index: 1000;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }

    .container {
        max-width: 1200px;
        margin: 0 auto;
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 0 20px;
    }

    .logo a {
        color: white;
        font-size: 28px;
        text-decoration: none;
        font-weight: bold;
        letter-spacing: 1px;
    }

    .nav-links {
        list-style: none;
        display: flex;
    }

    .nav-links li {
        margin-left: 30px;
    }

    .nav-links li a {
        color: white;
        text-decoration: none;
        font-size: 16px;
        transition: all 0.3s ease;
    }

    /* Navigation Hover Effects */
    .nav-links li a:hover {
        color: #ff3b30;
        transform: translateY(-2px);
    }

    /* Hero Section Styling */
    .hero {
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100vh;
        background: linear-gradient(135deg, #6a89cc, #f39c12);
        color: white;
        text-align: center;
        padding: 20px;
    }

    .hero h1 {
        font-size: 48px;
        margin-bottom: 15px;
        font-weight: 600;
    }

    .hero p {
        font-size: 18px;
        margin-bottom: 30px;
    }

    /* Button Styling */
    .btn {
        padding: 12px 30px;
        font-size: 16px;
        color: white;
        background-color: #ff3b30;
        border: none;
        border-radius: 5px;
        text-transform: uppercase;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .btn:hover {
        background-color: #e63946;
        transform: translateY(-3px);
    }

    /* Responsive Design */
    @media screen and (max-width: 768px) {
        .container {
            flex-direction: column;
            align-items: center;
        }

        .nav-links {
            margin-top: 20px;
            text-align: center;
            width: 100%;
        }

        .nav-links li {
            margin-left: 0;
            margin-bottom: 10px;
        }

        .hero {
            flex-direction: column;
            padding: 40px 20px;
        }

        .hero h1 {
            font-size: 36px;
        }

        .hero p {
            font-size: 16px;
        }
    }
</style>
<body>

    <!-- Navigation Bar -->
    <nav>
        <div class="container">
            <div class="logo">
                <a href="#">Scholar Tracking System</a>
            </div>
            <ul class="nav-links">
                <li><a href="../add_student.html">Add/Student</a></li>
                <li><a href="../list.html">Student list</a></li>
                <li><a href="../start.html">Log out</a></li>
            </ul>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero">
        <div>
            <h1>Welcome to My Scholar Tracking System</h1>
            <p>Your journey to better student management starts here.</p>
            <a href="#about" class="btn">Learn More</a>
        </div>
    </section>

</body>
</html>


