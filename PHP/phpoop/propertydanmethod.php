<?php 

class produk {
    public $judul = "judul", 
            $penulis = "penulis",
            $penerbit = "penerbit",
            $harga = 0; 

    public function sayHello(){
        return "Hello World!";
    }

    public function getLabel(){
        return "$this->penulis, $this->penerbit";
    }
}

// $produk1 = new produk();
// $produk1->judul = "boruto";

// $produk2 = new produk();
// $produk2->tambahProperty = "25feb2022";

// var_dump($produk1);
// var_dump($produk2);

$produk3 =  new produk();
$produk3->judul="Naruto";
$produk3->penulis="Masashi Kishimoto";
$produk3->penerbit="Shonen Jump";
$produk3->harga=30000;
// var_dump($produk3);
echo "Komik : $produk3->penulis, $produk3->penerbit";
echo "<br>";
echo $produk3->sayHello();
echo "<br>";

$produk4 = new produk();
$produk4->judul = "Riviera The Promised Island";
$produk4->penulis = "Sunaho Tobe";
$produk4->penerbit="Sony";
$produk4->harga = 350000;

echo $produk3->getLabel();

echo "<br>";
echo "Komik : " .$produk3->getLabel();
echo "<br>";
echo "Gambar : " .$produk4->getLabel();
?>