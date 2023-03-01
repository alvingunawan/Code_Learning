<?php 
    //Array
    //Variabel yang dapat memiliki banyak nilai
    //Element pada array boleh memiliki tipe data yang berbeda
    //Pasangan antara key dan value
    //Key-nya adalah index, yang dimulai dari 0

    //Membuat Array
    //Cara Lama
    $hari = array("senin","selasa","rabu");

    //Cara Baru
    $bulan = ["januari","februari","maret"];
    $arr1 = [123,"tulisan", false];
  
    //Menampilkan Array
    // var_dump() / print_r() //var_dump atau print_r untuk debugging sama testing
    // cara yang benar itu pakai for(latihan2) atau foreach(latihan3)
    var_dump($hari);
    echo "<br>";
    print_r($bulan);

    //Menampilkan 1 elemen pada array
    echo "<br>";
    echo $arr1[0];
    echo "<br>";
    echo $bulan[1];

    //Menambahkan elemen baru pada array
    echo "<br>";
    var_dump($hari);
    $hari[] = "Kamis";
    $hari[] = "Jum'at";
    echo "<br>";
    var_dump($hari);
?>