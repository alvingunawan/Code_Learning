<?php 

//cara 1 mendefinisikan konstanta, tidak bisa disimpan kedalam class
//cuma bisa jadi variabel global
// define('NAMA','Alvin Gunawan');
// echo NAMA;

// echo "<br>";

//cara 2 bisa dimasukan ke dalam class
// const UMUR = 32;
// echo UMUR;

// class coba{
//     const NAMA = 'Alvin Gunawan';
// }

// echo coba::NAMA;

//Contoh magic constant LINE,FILE,DIR,FUNCTION,CLASS,TRAIT,METHOD,NAMESPACE
// echo __FILE__;

// function coba(){
//     return __FUNCTION__;
// }
// echo coba();

class coba{
    public $kelas = __CLASS__;
}

$obj = new coba();
echo $obj->kelas;

?>