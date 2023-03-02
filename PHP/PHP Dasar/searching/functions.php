<?php 
// koneksi ke database
    $conn = mysqli_connect("localhost","root","","phpdasar");

    function query($query) {
        global $conn;
        $result = mysqli_query($conn, $query);
        $rows = [];
        while($row = mysqli_fetch_assoc($result)){
            $rows[] = $row;
        }
        return  $rows;
    }

    function tambah($data){
        global $conn;
        //ambil data dari tiap element dalam form
        //html special chars biar pas ada yang iseng masukin script atau css, datanya
        //tidak langsung di olah, tapi cuma tampilin teksnya aja
        $nim = htmlspecialchars($data["nim"]);
        $nama = htmlspecialchars($data["nama"]);
        $jurusan = htmlspecialchars($data["jurusan"]);
        $email = htmlspecialchars($data["email"]);
        $gambar = htmlspecialchars($data["gambar"]);

        // query insert data 
        $query = "INSERT INTO mahasiswa VALUES ('','$nim','$nama','$jurusan','$email','$gambar')";
        mysqli_query($conn,$query);

        return mysqli_affected_rows($conn);
    }

    function hapus($id){
        global $conn;
        mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id");
        return mysqli_affected_rows($conn);
    }

    function ubah($data){
        global $conn;
        //ambil data dari tiap element dalam form
        //html special chars biar pas ada yang iseng masukin script atau css, datanya
        //tidak langsung di olah, tapi cuma tampilin teksnya aja
        $id = $data["id"];
        $nim = htmlspecialchars($data["nim"]);
        $nama = htmlspecialchars($data["nama"]);
        $jurusan = htmlspecialchars($data["jurusan"]);
        $email = htmlspecialchars($data["email"]);
        $gambar = htmlspecialchars($data["gambar"]);

        // query update data 
        $query = "UPDATE mahasiswa SET 
                    nim = '$nim', 
                    nama = '$nama', 
                    jurusan = '$jurusan',
                    email = '$email',
                    gambar = '$gambar'
                    WHERE id = $id
                    ";
        mysqli_query($conn,$query);

        return mysqli_affected_rows($conn);
    }

    function cari($keyword){
        $query = "SELECT * FROM mahasiswa WHERE 
                    nama LIKE '%$keyword%' OR 
                    nim LIKE '%$keyword%' OR
                    jurusan LIKE '%$keyword%' OR
                    email LIKE '%$keyword%'
                ";
        return query($query);
    }
?>