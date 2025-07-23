<?php
$email = "fakhryhartono@google.com";
$no_hp = "0817250118";
$alamat = "Karangasem";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontak</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav>
        <a href="index.php">Beranda</a>
        <a href="about.php">Tentang saya</a>
        <a href="kontak.php">Kontak</a>
    </nav>

    <div class="container">
        <h2>Kontak saya</h2>
        <ul>
            <li>Email: <?= $email?></li>
            <li>Whatsapp: <?= $no_hp?></li>
            <li>Alamat: <?= $alamat ?></li>
        </ul>

        <footer>
            <p>&copy; <?= date("Y") ?> Fakhry Al Fatih Hartono. All Rights Reserved.</p>
        </footer>
    </div>
</body>
</html>