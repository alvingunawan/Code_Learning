// Berbagai cara untuk membuat objek

//Object Literal

var mhs1 = {
  nama: "Alvin Gunawan",
  nrp: "20222010014",
  email: "alvinasd@gmail.com",
  jurusan: "Teknik Informatika",
};

var mhs2 = {
  nama: "Gunawan Alvin",
  nrp: "20222010015",
  email: "gunawanasd@gmail.com",
  jurusan: "Teknik Perangkat Lunak",
};

//Function Declaration
function buatObjectMahasiswa(nama, nrp, email, jurusan) {
  var mhs = {};
  mhs.nama = nama;
  mhs.nrp = nrp;
  mhs.email = email;
  mhs.jurusan = jurusan;
  return mhs;
}

var mhs3 = buatObjectMahasiswa("Clarisiela", "20222010016", "clarisiela@gmail.com", "Teknik Pangan");

//Object Constructor

function Mahasiswa(nama, nrp, email, jurusan) {
  this.nama = nama;
  this.nrp = nrp;
  this.email = email;
  this.jurusan = jurusan;
}

var mhs4 = new Mahasiswa("Eclesia", "20222010017", "eclesia@gmail.com", "Ilmu Komunikasi");
