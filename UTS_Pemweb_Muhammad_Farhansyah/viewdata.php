<!DOCTYPE html>
<html lang="en">
<head>
    <title>View Data</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap');

        body {
            background-color: #f8f9fa;
            color: #333;
            font-family: 'Poppins', sans-serif;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        .footer {
            background-color: #343a40;
            color: #ccc;
            padding: 10px 0;
            text-align: center;
            font-size: 0.9rem;
            font-weight: 500;
            margin-top: auto;
        }

        .footer p {
            color: darkgray;
            margin: 0;
        }

        .navbar {
            background-color: rgba(0, 0, 0, 0.8);
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
            margin-right: 20px;
            padding: 10px 15px;
            transition: color 0.3s ease;
        }

        .navbar-nav .nav-link:hover {
            color: #f8f9fa;
        }

        .table {
            background-color: rgba(255, 255, 255, 0.5); /* Background lebih transparan */
            border-radius: 10px; /* Sudut membulat */
            overflow: hidden; /* Pastikan sudut membulat diterapkan */
        }

        .table th, .table td {
            border: none; /* Hilangkan border untuk tampilan lebih bersih */
        }

        .background {
            background: url('background.jpg') no-repeat center center;
            background-size: cover;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
        }

        .animated-title {
            opacity: 0;
            transform: translateY(20px);
            animation: fadeInUp 1.5s ease forwards;
        }

        .animated-row {
            opacity: 0;
            animation: fadeIn 1.2s ease forwards;
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

        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }
    </style>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="background"></div>

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

<div class="container mt-3">
    <h2 class="animated-title">Data Kontak</h2>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Depan</th>
                <th>Nama Belakang</th>
                <th>Nomor Telepon</th>
                <th>Email</th>
                <th>Pesan</th>
            </tr>
        </thead>
        <tbody>
            <?php
                include 'koneksi.php';
                
                $sql = "SELECT * FROM kontak";
                $result = mysqli_query($koneksi, $sql);
                
                if (mysqli_num_rows($result) > 0) {
                    $no = 1;
                    while($row = mysqli_fetch_assoc($result)) {
                        echo "<tr class='animated-row' style='animation-delay: " . ($no * 0.1) . "s;'>
                                <td>" . $no++ . "</td>
                                <td>" . $row['nama_depan'] . "</td>
                                <td>" . $row['nama_belakang'] . "</td>
                                <td>" . $row['no_telepon'] . "</td>
                                <td>" . $row['email'] . "</td>
                                <td>" . $row['pesan'] . "</td>
                              </tr>";
                    }
                } else {
                    echo "<tr><td colspan='6'>Tidak ada data ditemukan</td></tr>";
                }
                
                mysqli_close($koneksi);
            ?>
        </tbody>
    </table>
    
    <a href="Contact.php" class="btn btn-primary">Kembali</a>
</div>

<div class="footer">
    <p>&copy; Muhammad Farhansyah</p>
</div>

</body>
</html>
