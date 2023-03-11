<?php 

class produk {
    public $judul = "judul", 
            $penulis = "penulis",
            $penerbit = "penerbit",
            $harga = 0; 

    public function sayHello(){
        return "Hello World!";
    }

    public function __construct($judul,$penulis,$penerbit,$harga){
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function getLabel(){
        return "$this->penulis, $this->penerbit";
    }
}


class cetakInfoProduk{
    public function cetak(produk $produk){
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
        return $str;
    }
}

$produk1 =  new produk("Naruto","Masashi Kishimoto","Shonen Jump", 30000);
$produk2 = new produk("Riviera The Promised Land", "Sunaho Tobe", "Sony Pictures", 250000);


echo "<br>";
echo "Komik : " .$produk1->getLabel();
echo "<br>";
echo "Gambar : " .$produk2->getLabel();
echo "<br>";

$infoProduk1 = new cetakInfoProduk();
echo $infoProduk1->cetak($produk1);
?>
