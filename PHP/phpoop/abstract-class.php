<?php

use cetakInfoProduk as GlobalCetakInfoProduk;

abstract class produk {
    private $judul, 
            $penulis,
            $penerbit,
            $harga,
            $diskon=0;

    public function sayHello(){
        return "Hello World!";
    }

    public function __construct($judul = "judul",$penulis = "penulis",$penerbit="penerbit",$harga=0){
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function setJudul($judul){
        if(!is_string($judul)){
            throw new Exception("Judul harus string!");
        }
        return $this->judul = $judul;
    }

    public function getJudul(){
        return $this->judul;
    }

    public function setPenulis($penulis){
        return $this->penulis = $penulis;
    }

    public function getPenulis(){
        return $this->penulis;
    }

    public function setPenerbit($penerbit){
        return $this->penerbit = $penerbit;
    }

    public function getPenerbit(){
        return $this->penerbit;
    }

    public function setDiskon($diskon){
        $this->diskon = $diskon;
    }

    public function getDiskon(){
        $this->diskon;
    }
    
    public function setHarga($harga){
        return $this->harga = $harga;
    }

    public function getHarga(){
        return $this->harga - ($this->harga * $this->diskon / 100);
    }

    public function getLabel(){
        return "$this->penulis, $this->penerbit";
    }

    abstract public function getInfoProduk();
    
    public function getInfo(){
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
        $str = "Komik : " . $this->getInfo() . " - {$this->jmlHalaman} Halaman.";
        return $str;
    }
}

class game extends produk{
    public $waktuMain;

    public function __construct($judul = "judul",$penulis = "penulis",$penerbit="penerbit",$harga=0,$waktuMain=0){
        parent::__construct($judul,$penulis,$penerbit,$harga);
        $this->waktuMain=$waktuMain;
    }

    public function getInfoProduk(){
        $str = "Game :  " . $this->getInfo() . " ~ {$this->waktuMain} Jam.";
        return $str;
    }
}

class cetakInfoProduk{
    public $daftarProduk = [];

    public function tambahProduk(Produk $produk){
        $this->daftarProduk[] = $produk;
    }
    public function cetak(){
        $str = "DAFTAR PRODUK : <br>";

        foreach($this->daftarProduk as $p){
            $str .= "- {$p->getInfoProduk()} <br>";
        }
        
        return $str;
    }
}

$produk1 =  new komik("Naruto","Masashi Kishimoto","Shonen Jump", 30000, 100);
$produk2 = new game("Riviera The Promised Land", "Sunaho Tobe", "Sony Pictures", 250000, 50);

$cetakProduk = new cetakInfoProduk();
$cetakProduk->tambahProduk($produk1);
$cetakProduk->tambahProduk($produk2);

echo $cetakProduk->cetak();