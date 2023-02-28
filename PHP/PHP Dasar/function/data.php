<?php 
    //Date
    //Untuk menampilkan tanggal dengan format tertentu 
    echo date("l, d-M-Y");

    //Time
    //UNIX Timestamp / EPOCH time
    //detik yang sudah berlalu sejak 1 januari 1970
    echo time();
    echo date("l", time()+172800); // tampilkan hari ini ditambah sekian detik, 172800 itu 2 hari
    echo date("l", time()+60*60*24*100); // tampilkan hari ini ditambah 100 hari, nah 100 hari kemudian hari apa
    echo date("d M Y", time()+60*60*24*100);

    //mktime
    //membuat sendiri detik
    // mktime(0,0,0,0,0,0);
    // jam,menit,detik,bulan,tanggal,tahun
    echo mktime(0,0,0,11,30,2000);
    echo date("l",mktime(0,0,0,11,30,2000));

    //strtotime
    echo strtotime("30 nov 2000");
    echo date("l",strtotime("30 nov 2000"));
?>