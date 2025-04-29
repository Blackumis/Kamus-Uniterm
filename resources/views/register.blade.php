<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UniTerm – Register</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            margin: 0;
            font-family: 'Inter', sans-serif;
            background: linear-gradient(to bottom, #1E2E45, #748DAC, #3E5C76);
            background-repeat: no-repeat;
            background-size: cover;
            background-attachment: fixed;
            color: white;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .card {
            background-color: rgba(255, 255, 255, 0.1);
            padding: 2rem;
            border-radius: 15px;
            width: 350px;
            position: relative;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.3);
        }

        .card h2 {
            text-align: center;
            margin-bottom: 1.5rem;
            color: #ffffff;
        }

        label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 600;
        }

        input {
            width:93%;
            padding: 0.75rem;
            border: none;
            border-radius: 8px;
            margin-bottom: 1.5rem;
            font-size: 1rem;
        }

        .footer-links {
            display: flex;
            justify-content: space-between;
            font-size: 0.9rem;
        }

        .footer-links a {
            color: #d1d5db;
            text-decoration: none;
        }

        .btn {
            width: 90%;
            padding: 1rem;
            border: none;
            background-color: #3E5C76;
            color: white;
            font-weight: bold;
            border-radius: 8px;
            cursor: pointer;
            margin : 10px;
        }

        footer {
            text-align: right;
            padding: 2rem;
            font-size: 0.9rem;
            color: #ccc;
        }
        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1rem 2rem;
            background: transparent;
        }
        nav a {
            margin: 0 1rem;
            text-decoration: none;
            color: white;
            font-weight: 500;
        }
    </style>
</head>
<body>
    <nav>
        <div class="logo"><a href="/">UniTerm</div></a>
        <div class="links">
            <a href="/Glosarium">Glosarium</a>
            <a href="/AboutUs">About</a>
            <a href="#">Contact</a>
            <a href="/login"><img src="https://img.icons8.com/ios-filled/24/ffffff/user.png" alt="Profile"></a>
        </div>
    </nav>
    <div class="container">
        <div class="card">
            <h2>Create a UniTerm Account</h2>
            <form>
                <label for="name">Nama</label>
                <input type="text" id="name" placeholder="Enter your name">

                <label for="email">Email</label>
                <input type="email" id="email" placeholder="Enter your email">

                <label for="password">Password</label>
                <input type="password" id="password" placeholder="Enter your password">

                <div class="footer-links">
                    <a href="/login">Back to Login</a>
                </div>

                <button class="btn" type="submit">Sign Up</button>
            </form>
        </div>
    </div>

    <footer>
        &copy; 2025 UniTerm. All rights reserved.
    </footer>
</body>
</html>
