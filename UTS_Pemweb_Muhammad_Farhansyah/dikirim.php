<!DOCTYPE html>
<html lang="en">
<head>
    <title>Dikirim</title>
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

        .success-message {
            text-align: center;
            font-size: 2rem;
            color: white;
            background-color: rgba(0, 0, 0, 0.5);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
            margin-bottom: 20px;
            opacity: 0; 
            animation: fadeIn 2s forwards; 
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        .back-button {
            text-align: center;
            margin-bottom: 20px;
            opacity: 0; 
            animation: fadeIn 2s forwards; 
            animation-delay: 1s; 
        }

        .back-button .btn {
            transition: background-color 0.3s, transform 0.3s;
        }

        .back-button .btn:hover {
            background-color: #0056b3; 
            transform: scale(1.05); 
        }

        .spacer {
            height: 420px; 
        }
    </style>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="background"></div>

<nav class="navbar navbar-expand-md">
    <div class="container">
        <a class="navbar-brand" href="Dikirim.php">MENU</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="Home.php">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="About.php">About</a></li>
                <li class="nav-item"><a class="nav-link" href="Contact.php">Contact</a></li>
                <li class="nav-item"><a class="nav-link" href="Social">Social</a></li>
                <li class="nav-item"><a class="nav-link" href="Certif.php">Certificate</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="container mt-3">
    <h2 class="success-message">Selamat, data anda berhasil dikirim.</h2>

    <div class="spacer"></div> 

    <div class="back-button">
        <a href="Contact.php" class="btn btn-primary">Kembali</a>
    </div>
</div>

<div class="footer">
    <p>&copy; Muhammad Farhansyah</p>
</div>

</body>
</html>
