<?php 
    // Array Associative
    // Definisinya sama seperti Array Numerik, kecuali
    // key-nya adalah string yang kita buat sendiri
    $mahasiswa = [
        [
            "nama" => "Alvin Gunawan",
            "nim" => "20211010014",
            "jurusan" => "Teknik Informatika",
            "email" => "iniemailalvin@gmail.com",
            "gambar" => "kanade.jpg"
        ],
        [
            "nama" => "Eclesia",
            "nim" => "20211010015",
            "jurusan" => "Teknik Informatika",
            "email" => "iniemaileclesia@gmail.com",
            "gambar" => "luna.jpg"
            // "tugas" => [90,80,100]
        ],
        [
            "nama" => "Stacia",
            "nim" => "20211010016",
            "jurusan" => "Teknik Otomasi",
            "email" => "iniemailstacia@gmail.com",
            "gambar" => "sora.jpg"
        ]
    ];

    // echo $mahasiswa[1]["tugas"][1];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <?php foreach($mahasiswa as $mhs) : ?>
    <ul>
        <li>
            <img src="img/<?= $mhs["gambar"] ?>" alt="gambar">
        </li>
        <li>Nama : <?= $mhs["nama"] ?></li>
        <li>Nim : <?= $mhs["nim"] ?></li>
        <li>Jurusan : <?= $mhs["jurusan"] ?></li>
        <li>Email : <?= $mhs["email"] ?></li>
    </ul>
    <?php endforeach; ?>
</body>
</html>