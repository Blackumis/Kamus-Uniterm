<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Istilah - UniTerm</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            margin: 0;
            font-family: 'Inter', sans-serif;
            background: linear-gradient(to bottom, #1E2E45, #748DAC, #3E5C76);
            color: white;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1rem 2rem;
        }
        nav a {
            margin: 0 1rem;
            text-decoration: none;
            color: white;
            font-weight: 500;
        }
        .container {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .card {
            background-color: rgba(255, 255, 255, 0.2);
            padding: 2rem;
            border-radius: 1rem;
            box-shadow: 0 4px 12px rgba(0,0,0,0.3);
            max-width: 600px;
            width: 90%;
        }
        .card h1 {
            font-size: 2.5rem;
            margin-bottom: 1rem;
        }
        .card p {
            font-size: 1.2rem;
        }
        footer {
            text-align: right;
            padding: 1rem 2rem;
            font-size: 0.9rem;
            color: rgba(255, 255, 255, 0.6);
        }
    </style>
</head>
<body>
    <nav>
        <div class="logo"><a href="/">UniTerm</div></a>
        <div>
            <a href="/glosarium">Glosarium</a>
            <a href="/About">About</a>
            <a href="/AboutUs">Contact</a>
            <a href="/login"><img src="https://img.icons8.com/ios-filled/24/ffffff/user.png" alt="User"></a>
        </div>
    </nav>

    <div class="container">
        <div class="card">
            <h1>War IRS</h1>
            <p>Kegiatan berebut memilih jam kuliah sesama mahasiswa di jurusan yang sama. Biasa dilakukan saat liburan semester.</p>
        </div>
    </div>

    <footer>
        © 2025 UniTerm. All Rights Reserved
    </footer>
</body>
</html>
