<!doctype html>
<html lang="en">
<head>
    <title>Hubungi Saya</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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

        .hero-content {
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<nav class="navbar navbar-expand-md">
    <div class="container">
        <a class="navbar-brand" href="Contact.php">MENU</a>
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
    <div class="container hero-content"> 
        <?php
        include 'koneksi.php'; 
        
        $sql_contact = "SELECT title, description FROM contact WHERE id = 1"; 
        $result_contact = mysqli_query($koneksi, $sql_contact);

        if (mysqli_num_rows($result_contact) > 0) {
            while($row = mysqli_fetch_assoc($result_contact)) {
                echo "<h2 class='text-white'>" . $row["title"] . "</h2>"; 
                echo "<p class='text-white'>" . $row["description"] . "</p>"; 
            }
        } else {
            echo "<p>Tidak ada data yang ditemukan.</p>";
        }
        ?>

        <form action="simpandata.php" method="POST" class="mt-4">
            <div class="mb-3">
                <label for="namadepan" class="form-label text-white">Nama Depan:</label>
                <input type="text" class="form-control" id="namadepan" placeholder="Masukkan Nama Depan" name="namadepan" required>
            </div>
            <div class="mb-3">
                <label for="namabelakang" class="form-label text-white">Nama Belakang:</label>
                <input type="text" class="form-control" id="namabelakang" placeholder="Masukkan Nama Belakang" name="namabelakang" required>
            </div>
            <div class="mb-3">
                <label for="telepon" class="form-label text-white">Nomor Telepon:</label>
                <input type="tel" class="form-control" id="telepon" placeholder="Masukkan Nomor Telepon" name="telepon" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label text-white">Email:</label>
                <input type="email" class="form-control" id="email" placeholder="Masukkan Email" name="email" required>
            </div>
            <div class="mb-3">
                <label for="pesan" class="form-label text-white">Pesan:</label>
                <textarea class="form-control" id="pesan" placeholder="Masukkan Pesan" name="pesan" rows="4" required></textarea>
            </div>
            <div class="d-flex">
                <button type="submit" class="btn btn-primary me-2" name="tombol">Submit</button>
                <a href="viewdata.php" class="btn btn-secondary">List</a>
            </div>
        </form>
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
        echo "<p>Tidak ada konten footer yang ditemukan.</p>";
    }
    ?>
</div>

</body>
</html>
