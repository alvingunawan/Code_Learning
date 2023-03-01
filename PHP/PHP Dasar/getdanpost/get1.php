<?php 
    //SUPERGLOBALS
    //Variable global milik PHP
    //Merupakan Array Associative
    //$_GET
    // $_GET["nama"] = "Alvin Gunawan";
    // $_GET["nim"] = "20211010014";
    $mahasiswa = [
        [
            "nama" => "Alvin Gunawan",
            "nim" => "20211010014",
            "jurusan" => "Teknik Informatika",
            "email" => "iniemailalvin@gmail.com",
            "gambar" => "kanade.jpg"
        ],
        [
            "nama" => "Sora",
            "nim" => "20211010015",
            "jurusan" => "Teknik Industri",
            "email" => "iniemailsora@gmail.com",
            "gambar" => "luna.jpg"
            // "tugas" => [90,80,100]
        ],
        [
            "nama" => "Luna",
            "nim" => "20211010016",
            "jurusan" => "Teknik Otomasi",
            "email" => "iniemailluna@gmail.com",
            "gambar" => "sora.jpg"
        ]
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <ul>
        <?php foreach($mahasiswa as $mhs) : ?>
            <li>
                <!-- Metode Request GET adalah metode pengiriman data melalui URL,
                 dan data tersebut bisa diambil oleh variabel superglobal $_GET -->
                 <!-- Metode request get itu yang di a href dibawah yang ada phpnya -->
                <a href="get2.php?nama=<?= $mhs["nama"]; ?>&nim=<?= $mhs["nim"];?>&jurusan=<?= $mhs["jurusan"];?>&email=<?=$mhs["email"];?>&gambar=<?=$mhs["gambar"];?>"><?= $mhs["nama"] ?></a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>