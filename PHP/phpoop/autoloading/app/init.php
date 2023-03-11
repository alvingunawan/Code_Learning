<?php 
    // Cara 1
    // require_once 'Produk/InfoProduk.php';
    // require_once 'Produk/produk.php';
    // require_once 'Produk/komik.php';
    // require_once 'Produk/game.php';
    // require_once 'Produk/cetakInfoProduk.php';

    // Cara 2
    spl_autoload_register(function($class){
        require_once __DIR__ . '/Produk/' . $class . '.php';
    });   
?>