<?php 
    $mahasiswa = ["Alvin Gunawan","20211010014","Teknik Informatika", "iniemailalvin@gmail.com"];
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

    <!-- Cara 1 -->
    <ul>
        <li><?= $mahasiswa[0] ?></li>
        <li><?= $mahasiswa[1] ?></li>
        <li><?= $mahasiswa[2] ?></li>
        <li><?= $mahasiswa[3] ?></li>
    </ul>

    <!-- Cara 2, lebih recomended ini, jika arraynya 1 dimensi saja -->
    <ul>
        <?php foreach($mahasiswa as $mhs): ?>
            <li><?php echo $mhs ?></li>
        <?php endforeach; ?>
    </ul>

</body>
</html>