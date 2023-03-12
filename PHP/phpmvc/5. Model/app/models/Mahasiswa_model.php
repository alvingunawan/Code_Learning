<?php 

class Mahasiswa_model{

    //database handler
    private $dbh;

    //statement, untuk nyimpan query
    private $stmt;

    public function __construct()
    {
        // data source name
        $dsn = 'mysql:host=localhost;dbname=phpmvc';

        try{
            $this->dbh = new PDO($dsn, 'root', '');
        }catch(PDOException $e){
            die($e->getMessage());
        }
    }

    // private $mhs = [
    //     [
    //         "nama" => "Alvin Gunawan",
    //         "nim" => "20211010014",
    //         "email" => "iniemailalvin@gmail.com",
    //         "jurusan" => "teknik informatika"
    //     ],
    //     [
    //         "nama" => "Luna Sosviua",
    //         "nim" => "20211010015",
    //         "email" => "iniemailluna@gmail.com",
    //         "jurusan" => "sistem informasi"
    //     ],
    //     [
    //         "nama" => "Krivue Wijaya",
    //         "nim" => "20211010016",
    //         "email" => "iniemailvue@gmail.com",
    //         "jurusan" => "manajemen"
    //     ]
    // ];

    public function getAllMahasiswa(){
        $this->stmt = $this->dbh->prepare('SELECT * FROM mahasiswa');
        $this->stmt->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}