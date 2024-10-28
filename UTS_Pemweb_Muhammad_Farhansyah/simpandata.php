<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<?php
    
    include 'koneksi.php';

    $namaDepan = $namaBelakang = $nomorTelepon = $email = $pesan = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["tombol"])) {
        $namaDepan = isset($_POST["namadepan"]) ? $_POST["namadepan"] : "";
        $namaBelakang = isset($_POST["namabelakang"]) ? $_POST["namabelakang"] : "";
        $nomorTelepon = isset($_POST["telepon"]) ? $_POST["telepon"] : "";
        $email = isset($_POST["email"]) ? $_POST["email"] : ""; // Menangkap input email
        $pesan = isset($_POST["pesan"]) ? $_POST["pesan"] : ""; // Menangkap input pesan

        
        if ($koneksi) {
            
            $sql = "INSERT INTO kontak (nama_depan, nama_belakang, no_telepon, email, pesan) 
                    VALUES ('$namaDepan', '$namaBelakang', '$nomorTelepon', '$email', '$pesan')";
            
            if (mysqli_query($koneksi, $sql)) {
                
                header("Location: dikirim.php");
                exit(); 
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
            }
            
            mysqli_close($koneksi); 
        } else {
            echo "Koneksi gagal.";
        }
    }
?>
</body>
</html>
