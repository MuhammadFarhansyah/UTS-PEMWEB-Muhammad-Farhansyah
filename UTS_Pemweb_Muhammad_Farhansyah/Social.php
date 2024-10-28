<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Social Media</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"> <!-- Font Awesome -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap');

        body {
            background-color: #f8f9fa;
            color: #333;
            font-family: 'Poppins', sans-serif;
        }

        .hero {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 50px;
            background: url('background.jpg') no-repeat center center;
            background-size: cover;
            height: 100vh;
            position: relative;
        }

        .hero-text {
            color: white;
            max-width: 600px;
            text-align: center;
            text-shadow: 1px 1px 10px rgba(0, 0, 0, 0.3);
            opacity: 0;
            transform: translateY(20px);
            animation: fadeInUp 1.5s ease forwards;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .hero h1 {
            font-size: 3rem;
            font-weight: 700;
            letter-spacing: 1px;
            margin-bottom: 20px;
        }

        .hero p {
            font-size: 1.2rem;
            font-weight: 300;
            margin-bottom: 20px;
        }

        .social-links {
            font-size: 2rem;
            margin-top: 20px;
        }

        .social-links a {
            color: white;
            margin: 0 15px;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .social-links a:hover {
            color: #f8f9fa;
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
            <a class="navbar-brand" href="Social.php">MENU</a>
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
            <h1>Sosial Media</h1>
            <p>Ikuti saya di platform sosial media berikut:</p>
            <div class="social-links">
                <?php
                $sql_social = "SELECT platform, url FROM social";
                $result_social = mysqli_query($koneksi, $sql_social);

                if (mysqli_num_rows($result_social) > 0) {
                    while ($row_social = mysqli_fetch_assoc($result_social)) {
                        echo '<a href="' . $row_social['url'] . '" target="_blank"><i class="fab fa-' . strtolower($row_social['platform']) . '"></i></a>';
                    }
                }
                ?>
            </div>
        </div>
    </div>

    <div class="footer">
        <?php
        $sql_footer = "SELECT content FROM footer WHERE id = 1"; 
        $result_footer = mysqli_query($koneksi, $sql_footer);

        if (mysqli_num_rows($result_footer) > 0) {
            while($row_footer = mysqli_fetch_assoc($result_footer)) {
                echo "<p>" . $row_footer["content"] . "</p>";
            }
        } else {
            echo "<p>&copy; Muhammad Farhansyah</p>";
        }
        ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
