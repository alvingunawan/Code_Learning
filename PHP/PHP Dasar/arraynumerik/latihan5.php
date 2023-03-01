<?php 
    //Array Numerik, adalah  Array yang indexnya angka 
    $mahasiswa = [["Alvin Gunawan","20211010014","Teknik Informatika", "iniemailalvin@gmail.com"],
    ["Eclesia","20211010015","Teknik Informatika", "iniemaileclesia@gmail.com"],
    ["Anggrosia","20211010016","Teknik Informatika", "iniemailanggrosia@gmail.com"]
];
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

    <!-- Cara 1, kepake saat array dalam array -->
    <?php foreach($mahasiswa as $mhs): ?>
    <ul>
        <li>Nama    : <?= $mhs[0] ?></li>
        <li>Nim     : <?= $mhs[1] ?></li>
        <li>Jurusan : <?= $mhs[2] ?></li>
        <li>Email   : <?= $mhs[3] ?></li>
    </ul>
    <?php endforeach;?>

</body>
</html>