<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Portofolio Saya - Sertifikat</title>
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
            height: 100vh;
            position: relative;
        }

        .certificates {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 20px;
        }

        .certificates img {
            width: 80%;
            max-width: 600px;
            border-radius: 10px;
            opacity: 0;
            transform: scale(0.9);
            animation: fadeIn 1.5s forwards ease-out;
            transition: transform 0.3s ease;
        }

        
        .certificates img:hover {
            transform: scale(1.05);
        }

        
        @keyframes fadeIn {
            from { opacity: 0; transform: scale(0.9); }
            to { opacity: 1; transform: scale(1); }
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
            <a class="navbar-brand" href="Certif.php">MENU</a>
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
        <div class="certificates">
            <?php
            
            $sql_certif = "SELECT * FROM certif";
            $result_certif = mysqli_query($koneksi, $sql_certif);

            if (mysqli_num_rows($result_certif) > 0) {
                while($row_certif = mysqli_fetch_assoc($result_certif)) {
                    echo '<img src="' . htmlspecialchars($row_certif["image_path"]) . '" alt="' . htmlspecialchars($row_certif["description"]) . '">';
                }
            } else {
                echo "<p>Tidak ada sertifikat yang tersedia.</p>";
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
