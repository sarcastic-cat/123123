<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You!</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(135deg, #74ebd5 0%, #acb6e5 100%);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0;
        }
        .thank-you-container {
            background: white;
            padding: 3rem;
            border-radius: 10px;
            text-align: center;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            max-width: 500px;
            width: 100%;
        }
        h1 {
            font-size: 2.5rem;
            color: #333;
            margin-bottom: 1.5rem;
        }
        p {
            font-size: 1rem;
            color: #555;
            margin-bottom: 1.5rem;
            line-height: 1.6;
        }
        a.button {
            display: inline-block;
            background-color: #5cb85c;
            color: white;
            padding: 0.8rem 1.5rem;
            margin: 0.5rem;
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
    <div class="thank-you-container">
        <h1>Thank You!</h1>
        <p>Your message has been successfully sent. We will get back to you as soon as possible.</p>
        <p>If you have any further questions, feel free to <a href="contact.html">contact us</a> again.</p>
        <a href="../index.html" class="button">Go Back to Home</a>
        <a href="display_users.php" class="button">View Stories</a>
    </div>
</body>
</html>
