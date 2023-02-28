<?php
// Pertemuan 2 - PHP Dasar
// Sintaks PHP

// Standar Output
// echo, print
// print_r untuk mencetak isi array
// var_dump untuk melihat isi dari variabel

// echo 'pakai';

// Penulisan sintaks PHP
// 1. PHP di dalam HTML
// 2. HTML di dalam PHP

// Variabel dan Tipe Data
// Variabel
// tidak boleh diawali dengan angka, tapi boleh mengandung angka
// $nama = "Alvin Gunawan";

// echo "Nama saya $nama!" // bedanya yang ini kebaca alvin
// echo 'Nama saya $nama!' // bedanya yang $nama ga kebaca alvin

// Operator
// Aritmatika
// + = * / %

// echo 1+1

// $x = 5;
// $y = 6;
// echo $x * $y;

// Pengabung string / Concatenation
// Variabel tidak boleh ada spasi atau - bolehnya pake _
// $nama_depan = "Alvin";
// $nama_belakang = "Gunawan";
// echo $nama_depan . " " .$nama_belakang;


// Operator Assignment atau penugasan
// =, +=, -=, *=, /=, %=, .=

// $x = 1;
// $x += 5;

// echo $x;

// $nama = "Alvin";
// $nama .= " ";
// $nama .= "Gunawan";
// echo $nama;

// Operator Perbandingan
// < > <= >= == !=
var_dump(1 == "1"); //true

// Operator Identitas
// === !==
var_dump(1 === "1"); //false


// Operator Logika
// &&, ||, !
$x = 10;
var_dump($x < 20 && $x % 2 == 0);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP</title>
</head>
<body>
    <!-- <h1>Halo selamat malam  </h1> -->
</body>
</html>


