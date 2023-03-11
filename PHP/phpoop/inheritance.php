<?php 

class produk {
    public $judul, 
            $penulis,
            $penerbit,
            $harga,
            $jmlHalaman,
            $waktuMain;

    public function sayHello(){
        return "Hello World!";
    }

    public function __construct($judul = "judul",$penulis = "penulis",$penerbit="penerbit",$harga=0, $jmlHalaman=0, $waktuMain=0){
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlHalaman = $jmlHalaman;
        $this->waktuMain = $waktuMain;
    }

    public function getLabel(){
        return "$this->penulis, $this->penerbit";
    }

    public function getInfoProduk(){
        $str = "";
        $str = "{$this->judul} | {$this->penulis}, {$this->penerbit}, (Rp. {$this->harga})";
        return $str;
    }
}


class komik extends produk{
    public function getInfoProduk(){
        $str = "Komik : {$this->judul} | {$this->penulis}, {$this->penerbit}, (Rp. {$this->harga}) - {$this->jmlHalaman} Halaman.";
        return $str;
    }
}

class game extends produk{
    public function getInfoProduk(){
        $str = "Game : {$this->judul} | {$this->penulis}, {$this->penerbit}, (Rp. {$this->harga}) ~ {$this->waktuMain} Jam.";
        return $str;
    }
}

class cetakInfoProduk{
    public function cetak(produk $produk){
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
        return $str;
    }
}

$produk1 =  new komik("Naruto","Masashi Kishimoto","Shonen Jump", 30000, 100, 0);
$produk2 = new game("Riviera The Promised Land", "Sunaho Tobe", "Sony Pictures", 250000, 0, 50);

// Komik : Naruto | Masashi Kishimoto, Shonen Jump (Rp. 30000) - 100 Halaman.
// Game : Riviera The Promisedf Land | Sunaho Tobe, Sony Picture (Rp. 250000) ~ 50 Jam.

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();