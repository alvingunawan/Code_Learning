<?php 
    session_start();
    // jika user belum login, kembalikan ke login.php
    if(!isset($_SESSION["login"]) ){
        header("location: login.php");
        exit;
    }

    require 'functions.php';
    $mahasiswa = query("SELECT * FROM mahasiswa");

    //tombol cari diklik
    if(isset($_POST["cari"])){
        $mahasiswa = cari($_POST["keyword"]);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
    <style>
        .loader{
            width: 32px;
            position: absolute;
            top: 138px;
            left: 280px;
            z-index: -1;
            display: none;
        }
    </style>
    <script src="js/jquery-3.6.3.min.js"></script>
    <script src="js/script.js"></script>
</head>
<body>
    <a href="logout.php">Logout</a>

    <h1>Daftar Mahasiswa</h1>
    <a href="tambah.php">Tambah data mahasiswa</a>
    <br><br>

    <form action="" method="post">
        <input type="text" name="keyword" size="40" placeholder="masukan keyword pencarian" autocomplete="off" id="keyword">
        <button type="submit" name="cari" id="tombolcari">Cari !</button>
        <img src="gif/dark-loader.gif" class="loader">
    </form>

    <br><br>
    <div id="container">
    <table border="1" cellpadding="10" cellspacing="0">
            <tr>
                <th>No.</th>
                <th>Aksi</th>
                <th>Gambar</th>
                <th>Nim</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Jurusan</th>
            </tr>

            <?php $i = 1 ?>
            <?php foreach($mahasiswa as $row) : ?>     
            <tr>
                <td><?= $i?></td>
                <td>
                    <a href="ubah.php?id=<?= $row["id"]?>">ubah</a> |
                    <a href="hapus.php?id=<?= $row["id"]?>">hapus</a>
                </td>
                <td><img src="img/<?= $row["gambar"]?>" alt="Vin" width="50"></td>
                <td><?= $row["nim"]?></td>
                <td><?= $row["nama"]?></td>
                <td><?= $row["email"]?></td>
                <td><?= $row["jurusan"]?></td>  
            </tr>
            <?php $i++ ?>
            <?php endforeach; ?>
        </table>
    </div>
</body>
</html>