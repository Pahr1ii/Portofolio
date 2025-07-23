<?php
$nama = "Fakhry Al Fatih Hartono";
$profesi = "Calon Programmer & Web Developer";
$deskripsi = "Saya adalah siswa SMKN 5 Surakarta, saya mengambil jurusan RPL.";
$email = "fakhryhartono@google.com";
$no_hp = "08172 50118";
$alamat = "Karangasem, Indonesia";
$foto = "foto.jpg";
$skills = ["HTML", "CSS", "PHP", "MySQL", "JavaScript"];
$pendidikan = [
    ["sekolah" => "SMK Negeri 5 Surakarta", "tahun" => "2023 - Sekarang"],
    ["sekolah" => "SMP Negeri 3 Surakarta", "tahun" => "2020 - 2023"]
];

$pengalaman = [
    ["judul" => "Proyek Aplikasi kasir", "bulan" => "November"]
];
?>

<!DOCTYPE html>
<html>
<head>
    <title><?= $nama ?> My Portofolio</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav>
    <a href="index.php">Beranda</a>
    <a href="about.php">Tentang Saya</a>
    <a href="kontak.php">Kontak</a>
</nav>
    <div class="container">
        <div class="profil">
            <img src="<?= $foto ?>" alt="Foto Profil">
            <h1><?= $nama ?></h1>
            <h3><?= $profesi ?></h3>
            <p><?= $deskripsi ?></p>
        </div>

        <div class="kontak">
            <h2>Kontak</h2>
            <ul>
                <li>Email: <?= $email ?></li>
                <li>No HP: <?= $no_hp ?></li>
                <li>Alamat: <?= $alamat ?></li>
            </ul>
        </div>

        <div class="skill">
            <h2>Keahlian</h2>
            <ul>
                <?php foreach($skills as $skill): ?>
                    <li><?= $skill ?></li>
                <?php endforeach; ?>
            </ul>
        </div>

        <div class="pendidikan">
            <h2>Pendidikan</h2>
            <ul>
                <?php foreach($pendidikan as $p): ?>
                    <li><?= $p['sekolah'] ?> (<?= $p['tahun'] ?>)</li>
                <?php endforeach; ?>
            </ul>
        </div>

        <div class="pengalaman">
            <h2>Pengalaman</h2>
            <ul>
                <?php foreach($pengalaman as $exp): ?>
                    <li><?= $exp['judul'] ?> (<?= $exp['bulan'] ?>)</li>
                <?php endforeach; ?>
            </ul>
        </div>

        <footer>
            <p>&copy; <?= date("Y") ?> <?= $nama ?></p>
        </footer>
    </div>
</body>
</html>
