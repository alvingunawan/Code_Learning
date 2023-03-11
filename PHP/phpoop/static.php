<?php  
// Static Keyword
//  class contohStatic{
//     public static $angka = 1;

//     public static function halo(){
//         return "Halo " . self::$angka++. " kali.";
//     }
//  }

// echo contohStatic::$angka;
// echo "<br>";
// echo contohStatic::halo();
// echo "<hr>";
// echo contohStatic::halo();

// Contoh 2 
// hasilnya 123 | 123
// class contoh{
//     public $angka = 1;

//     public function halo(){
//         return "Halo " . $this->angka++ . " kali. <br>";  
//     }
//  }

// $obj = new contoh;
// echo $obj->halo();
// echo $obj->halo();
// echo $obj->halo();

// echo "<hr>";

// $obj2 = new contoh;
// echo $obj2->halo();
// echo $obj2->halo();
// echo $obj2->halo();

// Contoh 3 dengan static di angka 
// hasilnya 123 | 456

class contoh{
    public static $angka = 1;

    public function halo(){
        return "Halo " . self::$angka++ . " kali. <br>";  
    }
 }

$obj = new contoh;
echo $obj->halo();
echo $obj->halo();
echo $obj->halo();

echo "<hr>";

$obj2 = new contoh;
echo $obj2->halo();
echo $obj2->halo();
echo $obj2->halo();
?>