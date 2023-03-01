<?php 
    //Variable Scope atau Lingkup Variabel
    $x = 10;

    function tampilX(){
        global $x; // supaya variabel $x diluar bisa dibaca didalam function
        echo $x;
    }

    tampilX();
?>