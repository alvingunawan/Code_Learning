// belajar element.innerHTML, element.style.propertinnya apa, element.setAttribute

// const h1 = document.getElementById("judul");
// h1.innerHTML = "Alvin Gunawan";

// const sectionA = document.querySelector("section#a");
// sectionA.innerHTML = "Alvin Gunawan versi section a";
// sectionA.style.backgroundColor = "lightblue";

// const judul = document.querySelector("section#b");
// judul.style.color = "lightblue";

// const judul = document.getElementsByTagName("h1")[0];
// judul.setAttribute("name", "alvinGunawan");

// const a = document.querySelector("section#a a");
// a.setAttribute("id", "link");
// console.log(a.getAttribute("href")); //buat tau atributnya apa
// a.removeAttribute("href"); // untuk menghapus atribut

const p2 = document.querySelector(".p2");
p2.classList.add("label"); // menambahkan class baru yang bernama label
p2.classList.remove("label"); // menghabpus class label
p2.classList.toggle("label"); // dia akan ngecek p2 sudah ada class label belum, kalau belum tambahkan, kalau sudah hapus.
p2.classList.item("2"); //ngecek urutan kelas ke 2 di p2 apa
p2.classList.contains("2"); //ngecek urutan kelas ke 2 di p2 apa, kalau true berarti ada
p2.classList.replace("dua", "empat"); // buat ganti kelas dua ke kelas empat
