<?php 

require_once 'App/init.php';

// $produk1 =  new Komik("Naruto","Masashi Kishimoto","Shonen Jump", 30000, 100);
// $produk2 = new Game("Riviera The Promised Land", "Sunaho Tobe", "Sony Pictures", 250000, 50);

// $cetakProduk = new CetakInfoProduk();
// $cetakProduk->tambahProduk($produk1);
// $cetakProduk->tambahProduk($produk2);

// echo $cetakProduk->cetak();

// as itu alias, namespacenya yg use
use App\Service\User as ServiceUser; 
use App\Produk\User as ProdukUser;
new ServiceUser();

echo "<br>";
new ProdukUser();

?>