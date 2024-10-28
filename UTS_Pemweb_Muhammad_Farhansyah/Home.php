<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Portofolio Muhammad Farhansyah</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap');

        body {
            background-color: #f8f9fa;
            color: #333;
            font-family: 'Poppins', sans-serif;
        }

        @keyframes fadeIn {
            0% {
                opacity: 0;
                transform: translateY(20px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes slideInRight {
            0% {
                opacity: 0;
                transform: translateX(100%);
            }
            100% {
                opacity: 1;
                transform: translateX(0);
            }
        }

        .hero {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 50px;
            background: url('background.jpg') no-repeat center center;
            background-size: cover;
            height: 100vh;
            position: relative;
        }

        .hero-text {
            color: white;
            max-width: 500px;
            z-index: 1;
            text-shadow: 1px 1px 10px rgba(0, 0, 0, 0.3);
        }

        .hero h1 {
            font-size: 3rem;
            font-weight: 700;
            letter-spacing: 1px;
            margin-bottom: 20px;
            animation: fadeIn 2s ease forwards;
            animation-delay: 0s;
        }

        .hero p {
            font-size: 1.2rem;
            font-weight: 300;
            margin-bottom: 20px;
            animation: fadeIn 2s ease forwards;
            animation-delay: 0s;
        }

        .hero .btn {
            font-size: 1rem;
            font-weight: 500;
            padding: 10px 20px;
            border-radius: 30px;
            animation: fadeIn 2s ease forwards;
            animation-delay: 0s;
        }

        .hero img {
            width: 300px;
            border-radius: 10px;
            z-index: 1;
            margin-left: 20px;
            animation: slideInRight 2s ease forwards;
            animation-delay: 0s;
        }

        .footer {
            background-color: #343a40;
            color: #ccc;
            padding: 10px 0;
            text-align: center;
            font-size: 0.9rem;
            font-weight: 500;
        }

        .footer p {
            color: darkgray;
            margin: 0;
        }

        .navbar {
            background-color: rgba(0, 0, 0, 0.7);
        }

        .navbar .navbar-brand {
            color: white !important;
            font-size: 1.5rem;
            font-weight: bold;
            font-family: 'Poppins', sans-serif;
        }

        .navbar-nav .nav-link {
            color: white !important;
            font-size: 1rem;
            font-weight: 500;
            margin-right: 15px;
            transition: color 0.3s ease;
        }

        .navbar-nav .nav-link:hover {
            color: #f8f9fa;
        }
    </style>
</head>
<body>
    <?php 
    include 'koneksi.php'; 
    ?>

    <nav class="navbar navbar-expand-md">
        <div class="container">
            <a class="navbar-brand" href="Home.php">MENU</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="Home.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="About.php">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="Contact.php">Contact</a></li>
                    <li class="nav-item"><a class="nav-link" href="Certif.php">Certificate</a></li>
                    <li class="nav-item"><a class="nav-link" href="Social.php">Social</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="hero">
        <div class="hero-text">
            <?php
            $sql = "SELECT * FROM home WHERE id = 1"; 
            $result = mysqli_query($koneksi, $sql);
            $data = mysqli_fetch_assoc($result);

            if ($data) {
                echo '<h1>' . htmlspecialchars($data['heading']) . '</h1>';
                echo '<p>' . htmlspecialchars($data['description']) . '</p>';
            } else {
                echo '<h1>Selamat Datang di Web Saya</h1>'; 
                echo '<p>Halo, ini adalah halaman portofolio saya. Terima kasih telah berkunjung!</p>';
            }
            ?>
            <a href="about.php" class="btn btn-primary">Start Here</a>
        </div>
        <img src="<?php echo htmlspecialchars($data['profile_image']); ?>" alt="Foto Saya" class="img-fluid"> 
    </div>

    <div class="footer">
        <?php
        $sql_footer = "SELECT content FROM footer WHERE id = 1"; 
        $result_footer = mysqli_query($koneksi, $sql_footer);

        if (mysqli_num_rows($result_footer) > 0) {
            while($row_footer = mysqli_fetch_assoc($result_footer)) {
                echo "<p>" . htmlspecialchars($row_footer["content"]) . "</p>";
            }
        } else {
            echo "<p>&copy; Muhammad Farhansyah</p>"; 
        }
        ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
