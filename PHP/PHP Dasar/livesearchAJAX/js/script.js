//ambil element yang dibutuhkan
// alert("ok");
var keyword = document.getElementById("keyword");
var tombolcari = document.getElementById("tombolcari");
var container = document.getElementById("container");

//tambahkan event jika keyword ditulis
keyword.addEventListener("keyup", function () {
  //buat objek ajax
  // alert("ok");
  // console.log(keyword.value);
  var xhr = new XMLHttpRequest();

  //cek kesiapan ajax
  xhr.onreadystatechange = function () {
    if (xhr.readyState == 4 && xhr.status == 200) {
      // console.log(xhr.responseText);
      container.innerHTML = xhr.responseText;
    }
  };
  //eksekusi ajax
  xhr.open("GET", "ajax/mahasiswa.php?keyword=" + keyword.value, true);
  xhr.send();
});
