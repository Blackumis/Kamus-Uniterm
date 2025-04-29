<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UniTerm – Login</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
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
            width: 500px;
            position: relative;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.3);
        }

        .card h2 {
            text-align: center;
            margin-bottom: 1.0rem;
            color: #ffffff;
        }

        label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 600;
        }

        input {
            width: 98%;
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
            width: 100%;
            padding: 1rem;
            border: 1px;
            background-color: #3E5C76;
            color: white;
            font-weight: bold;
            border-radius:10px;
            cursor: pointer;
            margin: 10px;
        }
        footer {
            text-align: right;
            padding: 2rem;
            font-size: 0.9rem;
            color: #ccc;
        }
         .icon-container {
        text-align: center;
        margin-bottom: -30px;
        }
        .icon-container i {
        font-size: 60px;
        color: white;
        background-color: #4b6eaf;
        border-radius: 50%;
        padding: 10px;
        border: 4px solid white;
        position: relative;
        top: 100px;
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
        </div>
        <div class="container">
            <div class="card">
                <h2>Login</h2>
                <form>
                    <label for="email">Email</label>
                    <input type="email" id="email" placeholder="Enter your email">
    
                    <label for="password">Password</label>
                    <input type="password" id="password" placeholder="Enter your password">
    
                    <div class="footer-links">
                        <a href="register">Sign Up</a>
                        <a href="#">Forgot Password?</a>
                    </div>
    
                    <button class="btn" type="submit">Login</button>
                </form>
            </div>
        </div>
    
        <footer>
            &copy; 2025 UniTerm. All rights reserved.
        </footer>
    </body>
    </html>

  