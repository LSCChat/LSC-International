
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Login Page</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap">

    <style>
        body {
            font-family: 'poppins', sans-serif;
            background-color: #f0f2f5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            display: flex;
            flex-direction: row;
            width: 900px;
            height: 500px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            overflow: hidden;
            background: #ffffff;
        }
        .left-side {
            /* background: linear-gradient(to bottom right, #4a90e2, #7b4397); */
            background-image: url('/images/login.svg');
            background-position: center;
            background-size:cover;
            background-repeat: no-repeat;
            color: white;
            flex: 1;
            padding: 40px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
        }
        .left-side h1 {
            margin-bottom: 20px;
            font-size: 28px;
        }
        .left-side p {
            font-size: 16px;
            margin-bottom: 10px;
        }
        .left-side .feature {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
        }
        .left-side .feature img {
            width: 25px;
            height: 25px;
            margin-right: 10px;
        }
        .right-side {
            flex: 1;
            padding: 40px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }
        .right-side h2 {
            margin-bottom: 20px;
            color: #333;
        }
        .right-side form {
            display: flex;
            flex-direction: column;
        }
        .right-side form input {
            padding: 15px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .right-side form button {
            padding: 15px;
            background:  #38419D;
            border: none;
            border-radius: 5px;
            color: white;
            font-size: 16px;
            cursor: pointer;
            transition: background 0.3s ease;
        }
        .right-side form button:hover {
            background: #357ABD;
        }
        .right-side form a {
            color:  #38419D;
            text-align: center;
            margin-top: 15px;
            text-decoration: none;
        }
        @media (max-width: 768px) {
            .container {
                flex-direction: column;
                width: 100%;
                height: auto;
                border-radius: 0;
            }
            .left-side, .right-side {
                padding: 20px;
                width: 100%;
            }
        }
        @media (max-width: 480px) {
            .left-side h1 {
                font-size: 24px;
            }
            .right-side h2 {
                font-size: 20px;
            }
            .right-side form input, .right-side form button {
                padding: 10px;
                font-size: 14px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="left-side">
            <!-- <h1>Welcome Back!</h1>
            <p>Manage your logistics efficiently with our platform.</p>
            <div class="feature">
                <img src="smart_platform.png" alt="Smart Platform">
                <span>Smart Platform</span>
            </div>
            <div class="feature">
                <img src="dedicated_kam.png" alt="Dedicated KAM">
                <span>Dedicated KAM</span>
            </div>
            <div class="feature">
                <img src="real_time_operation.png" alt="Real Time Operation">
                <span>Real-Time Operation</span>
            </div> -->
        </div>
        <div class="right-side">
            <h2>Login to Your Account</h2>
            <form action=""method='post'>
                <input type="email" placeholder="Email" required>
                <input type="password" placeholder="Password" required>
                <button type="submit">Login</button>
                <a href="#">Forgot Password?</a>
               @csrf
            </form>
        </div>
    </div>
</body>
</html>
