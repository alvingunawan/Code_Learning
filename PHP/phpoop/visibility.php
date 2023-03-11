<?php 

class produk {
    public $judul, 
            $penulis,
            $penerbit;

    protected $diskon = 0;

    private $harga;

    public function sayHello(){
        return "Hello World!";
    }

    public function __construct($judul = "judul",$penulis = "penulis",$penerbit="penerbit",$harga=0){
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function getHarga(){
        return $this->harga - ($this->harga * $this->diskon / 100);
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
    public $jmlHalaman;

    public function __construct($judul = "judul",$penulis = "penulis",$penerbit="penerbit",$harga=0,$jmlHalaman=0){
        parent::__construct($judul,$penulis,$penerbit,$harga);
        $this->jmlHalaman=$jmlHalaman;
    }

    public function getInfoProduk(){
        $str = "Komik : " . parent::getInfoProduk() . " - {$this->jmlHalaman} Halaman.";
        return $str;
    }
}

class game extends produk{
    public $waktuMain;

    public function __construct($judul = "judul",$penulis = "penulis",$penerbit="penerbit",$harga=0,$waktuMain=0){
        parent::__construct($judul,$penulis,$penerbit,$harga);
        $this->waktuMain=$waktuMain;
    }

    public function setDiskon($diskon){
        $this->diskon = $diskon;
    }

    public function getInfoProduk(){
        $str = "Game :  " . parent::getInfoProduk() . " ~ {$this->waktuMain} Jam.";
        return $str;
    }
}

class cetakInfoProduk{
    public function cetak(produk $produk){
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
        return $str;
    }
}

$produk1 =  new komik("Naruto","Masashi Kishimoto","Shonen Jump", 30000, 100);
$produk2 = new game("Riviera The Promised Land", "Sunaho Tobe", "Sony Pictures", 250000, 50);

// Komik : Naruto | Masashi Kishimoto, Shonen Jump (Rp. 30000) - 100 Halaman.
// Game : Riviera The Promisedf Land | Sunaho Tobe, Sony Picture (Rp. 250000) ~ 50 Jam.

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
echo "<hr>";

$produk2->setDiskon(50);
echo $produk2->getHarga();