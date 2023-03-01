<?php 
    // koneksi ke database
    $conn = mysqli_connect("localhost","root","","phpdasar");
    // ambil data (ambil lemarinya) dari tabel mahasiswa / query data mahasiswa
    $result = mysqli_query($conn, "SELECT * FROM mahasiswa");
    // untuk munculin error bila koneksinya gagal
    if(!$result){
        echo mysqli_error($conn);
    }

    // var_dump($result); //var_dump itu kayak kita dibawain lemari baju, padahal minta lihat bajunya aja
    // jadinya ga keliatan isi datanya
    // $result itu ibarat lemari, kita minta liat baju temen, tapi temen bawa sama lemarinya dan masih ditutup
    // difetch dari $result supaya isi lemarinya bisa terlihat

    // ambil data (fetch) mahasiswa dari object result, cara fetch/ambil datanya ada 4 cara:
    // mysqli_fetch_row(); //mengembalikan array numerik
    // $mhs = mysqli_fetch_row($result);
    // var_dump($mhs[3]);

    // mysqli_fetch_assoc(); //mengembalikan array associative
    // while ($mhs = mysqli_fetch_assoc($result)){
    //     var_dump($mhs);
    // }

    // mysqli_fetch_array(); // mengembalikan array numerik dan associative
    // $mhs = mysqli_fetch_array($result); //kekurangannya data yang disajikan double, dan makan memori
    // var_dump($mhs["jurusan"]);
    // var_dump($mhs);

    // mysqli_fetch_object(); // mengembalikan object, tidak ada key numerik dan key associative
    // $mhs = mysqli_fetch_object($result);
    // var_dump($mhs->email);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
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
        <?php while($row = mysqli_fetch_assoc($result)) : ?>     
        <tr>
            <td><?= $i?></td>
            <td>
                <a href="">ubah</a> |
                <a href="">hapus</a>
            </td>
            <td><img src="img/<?= $row["gambar"]?>" alt="Vin" width="50"></td>
            <td><?= $row["nim"]?></td>
            <td><?= $row["nama"]?></td>
            <td><?= $row["email"]?></td>
            <td><?= $row["jurusan"]?></td>
        </tr>
        <?php $i++ ?>
        <?php endwhile; ?>
    </table>
</body>
</html>