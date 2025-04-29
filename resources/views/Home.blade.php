<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UniTerm - Kamus Besar Kehidupan Kampus</title>
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
        .hero {
            text-align: center;
            padding: 5rem 2rem 2rem;
        }
        .hero h1 {
            font-size: 2.5rem;
            margin-bottom: 1rem;
        }
        .hero p {
            font-size: 1.2rem;
            color: #d1d5db;
        }
        .section {
            padding: 3rem 2rem;
            text-align: center;
        }
        .section h2 {
            background: #0f172a;
            display: inline-block;
            padding: 0.5rem 2rem;
            border-radius: 8px;
            margin-bottom: 2rem;
        }
        .cards {
            display: flex;
            justify-content: center;
            gap: 1rem;
            margin-bottom: 2rem;
            flex-wrap: wrap;
        }
        .card {
            background: #0f172a;
            padding: 2rem;
            border-radius: 8px;
            width: 200px;
        }
        .title-CariIstilah {
            background: #0f172a;
            padding: 1rem 10rem;
            border-radius: 8px;
            margin: 1rem auto;
            color: white;
            font-weight: bold;
            display: inline-block;
        }
        .input-section {
            background: #0f172a;
            padding: 2rem;
            border-radius: 8px;
            width: 90%;
            max-width: 600px;
            margin: 0 auto;
        }
        .input-section input {
            width: 90%;
            padding: 1rem;
            margin-bottom: 1rem;
            border-radius: 10px;
            border: 1rem;
            background: #1e293b;
            color: white;
        }
        .input-section button {
            width: 30%;
            padding: 0.8rem;
            border-radius: 8px;
            border: none;
            background: #1e293b;
            color: white;
            font-weight: bold;
            cursor: pointer;
        }
        footer {
            text-align: right;
            padding: 2rem;
            font-size: 0.8rem;
            color: #cbd5e1;
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

<section class="hero">
    <h1>Kamus Besar Kehidupan Kampus</h1>
    <p>Berisi kumpulan kata-kata yang digunakan mahasiswa diperkuliahan.</p>
</section>

<section class="section">
    <h2>ISTILAH HARI INI</h2>

    <div class="cards">
        <div class="card">War IRS</div>
        <div class="card">Food Truck</div>
        <div class="card">Nongkrong</div>
    </div>

    <div class="title-CariIstilah">CARI ISTILAH</div>

    <div class="input-section">
        <form action="{{ route('search') }}" method="GET">
            <input type="text" name="query" placeholder="Masukkan Istilah">
            <button type="submit">Cari</button>
        </form>
    </div>
</section>

<footer>
    © 2025 UniTerm. All Rights Reserved
</footer>

</body>
</html>
