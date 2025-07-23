<?php
$nama = "Fakhry Al Fatih Hartono";
$deskripsi = "Saya adalah pelajar yang sedang belajar web development dan tertarik pada dunia teknologi serta pemrograman.";
$skills = ["HTML", "CSS", "Java", "PHP", "MYSQL"];
$pendidikan = [
    ["sekolah" => "SMKN 5 Surakarta", "tahun" => "2023 - Sekarang"],
    ["sekolah" => "SMPN 3 Surakarta", "tahun" => "2020 - 2023"]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About me</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav>
    <a href="index.php">Beranda</a>
    <a href="about.php">Tentang saya</a>
    <a href="kontak.php">Kontak</a>
    </nav>

    <div class="container">
        <h2>Tentang saya</h2>
        <p><?= $deskripsi ?></p>
        
        <h2>Keahlian</h2>
        <ul>
            <?php foreach($skills as $skill): ?>
                <li><?= $skill ?></li>
            <?php endforeach; ?>
        </ul>
        <h2>Pendidikan</h2>
        <ul>
            <?php foreach($pendidikan as $edu): ?>
                <li><?= $edu['sekolah'] ?> (<?= $edu['tahun'] ?>)</li>
                <?php endforeach; ?>    
        </ul>
    </div>
</body>
</html>