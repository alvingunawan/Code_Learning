<?php 

class Database{
    private $host = DB_HOST;
    private $user = DB_USER;
    private $pass = DB_PASS;
    private $db_name = DB_NAME;

    //database handler
    private $dbh;

    //statement, untuk nyimpan query
    private $stmt;

    public function __construct()
    {
        // data source name
        $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->db_name;
        
        $option = [
            PDO::ATTR_PERSISTENT => true,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ];

        try{
            $this->dbh = new PDO($dsn, $this->user, $this->pass, $option);
        }catch(PDOException $e){
            die($e->getMessage());
        }
    }

    public function query($query){
        $this->stmt = $this->dbh->prepare($query);
    }

    public function bind($param, $value, $type = null){
        if(is_null($type)){
            switch(true){
                case is_int($value) :
                    $type = PDO::PARAM_INT;
                    break;
                case is_bool($value) :
                    $type = PDO::PARAM_BOOL;
                    break;
                case is_null($value) :
                    $type = PDO::PARAM_NULL;
                    break;
                default :
                    $type = PDO::PARAM_STR;
            }
        }
        $this->stmt->bindValue($param, $value, $type);
    }

    public function execute(){
        $this->stmt->execute();
    }

    public function resultSet(){
        $this->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function single(){
        $this->execute();
        return $this->stmt->fetch(PDO::FETCH_ASSOC);
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
}