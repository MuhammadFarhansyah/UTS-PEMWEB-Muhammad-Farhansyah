<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>About - Portofolio Saya</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
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
            min-height: calc(100vh - 60px); /* Menyisakan ruang untuk header dan footer */
            position: relative;
        }

        .hero-content {
            background-color: rgba(0, 0, 0, 0.7);
            padding: 20px;
            border-radius: 10px;
            color: #f8f9fa;
            text-align: justify;
            text-shadow: 1px 1px 10px rgba(0, 0, 0, 0.3);
            width: 100%; /* Set lebar 100% untuk memenuhi seluruh lebar .hero */
            opacity: 0;
            animation: fadeIn 1.5s forwards;
        }

        @keyframes fadeIn {
            to {
                opacity: 1;
            }
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

        .navbar .navbar-brand, .navbar-nav .nav-link {
            color: white !important;
            font-weight: 500;
            font-size: 1rem;
            margin-right: 15px;
            transition: color 0.3s ease;
        }

        .navbar-nav .nav-link:hover {
            color: #f8f9fa;
        }
    </style>
</head>
<body>
    <?php include 'koneksi.php'; ?>

    <nav class="navbar navbar-expand-md">
        <div class="container">
            <a class="navbar-brand" href="About.php">MENU</a>
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
        <div class="hero-content">
            <?php
            $sql = "SELECT title, description FROM about WHERE id = 1";
            $result = mysqli_query($koneksi, $sql);

            if (mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_assoc($result)) {
                    echo "<h1>" . htmlspecialchars($row["title"]) . "</h1>";
                    echo "<p>" . htmlspecialchars($row["description"]) . "</p>";
                }
            } else {
                echo "<h1>Tidak ada data yang ditemukan.</h1>";
                echo "<p>Silakan tambahkan informasi tentang diri Anda di database.</p>";
            }
            ?>
        </div>
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
