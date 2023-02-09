var penumpang = ["Alvin", undefined, "Eclesia"];
var tambahPenumpang = function (namaPenumpang, penumpang) {
  //jika angkot kosong
  if (penumpang.length == 0) {
    // tambah penumpang di array
    penumpang.push(namaPenumpang);
    // kembalikan isi array dan keluar dari function
    return penumpang;
  } else {
    // telusuri seluruh kursi dari awal
    for (i = 0; i < penumpang.length; i++) {
      // jika ada kursi kosong
      if (penumpang[i] == undefined) {
        // tambah penumpang di kursi tersebut
        penumpang[i] = namaPenumpang;
        // kembalikan isi array & keluar dari funtion
        return penumpang;
      }
      // jika sudah ada nama yang sama
      else if (penumpang[i] == namaPenumpang) {
        // tampilkan pesan kesalahannya
        console.log(namaPenumpang + "sudah ada di dalam angkot");
        // kembalikan isi array dan keluar dari function
        return penumpang;
      }
      // jika seluruh kursi telah terisi
      else if (i == penumpang.length - 1) {
        // tambah pengunjung di akhir array
        penumpang.push(namaPenumpang);
        // kembalikan isi array & keluar dari function
        return penumpang;
      }
    }
  }
};

var hapusPenumpang = function (namaPenumpang, penumpang) {
  if (penumpang.length == 0) {
    console.log("Angkot masih kosong!");
    return penumpang;
  } else {
    for (var i = 0; i < penumpang.length; i++) {
      if (penumpang[i] == namaPenumpang) {
        penumpang[i] = undefined;
        return penumpang;
      } else if (i == namaPenumpang.length - 1) {
        console.log(namaPenumpang + " tidak ada di dalam angkot");
        return penumpang;
      }
    }
  }
};
