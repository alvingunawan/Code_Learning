<?php 
    usleep(500000); // untuk simulasi loading agak lama, kalau asli ga usah dipakai
    require "../functions.php";
    $keyword = $_GET["keyword"];
    $query = "SELECT * FROM mahasiswa WHERE 
                    nama LIKE '%$keyword%' OR 
                    nim LIKE '%$keyword%' OR
                    jurusan LIKE '%$keyword%' OR
                    email LIKE '%$keyword%'
                ";
    $mahasiswa = query($query);

    // var_dump($mahasiswa);
?>

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