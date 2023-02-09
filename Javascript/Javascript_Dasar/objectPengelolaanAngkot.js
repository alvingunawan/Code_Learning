// Membuat Object Angkot

function Angkot(supir, trayek, penumpang, kas) {
  this.supir = supir;
  this.trayek = trayek;
  this.penumpang = penumpang;
  this.kas = kas;

  this.penumpangNaik = function (namaPenumpang) {
    this.penumpang.push(namaPenumpang);
    return this.penumpang;
  };

  this.penumpangTurun = function (namaPenumpang, bayar) {
    if (this.penumpang.length == 0) {
      alert("Angkot masih kosong bang");
      return false;
    }
    for (var i = 0; i < penumpang.length - 1; i++) {
      if (this.penumpang[i] == namaPenumpang) {
        this.penumpang[i] == undefined;
        this.kas += bayar;
        return this.penumpang;
      }
    }
  };
}

var angkot1 = new Angkot("Asgardians", ["Cilegon", "Merak"], [], 0);
var angkot2 = new Angkot("Yulesha", ["Serang", "Tangerang"], [], 0);
