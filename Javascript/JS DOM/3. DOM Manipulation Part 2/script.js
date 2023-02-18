// DOM Manipulation
//Buat Elemen Baru
const pBaru = document.createElement("p");
const teksPBaru = document.createTextNode("Paragraf Baru");
//Simpan tulisan kedalam paragraf
pBaru.appendChild(teksPBaru);
//Simpan pBaru diakhir sectionA
const sectionA = document.getElementById("a");

sectionA.appendChild(pBaru);
pBaru.style.backgroundColor = "lightblue";
//
const liBaru = document.createElement("li");
const teksLiBaru = document.createTextNode("Ini Teks Baru");
liBaru.appendChild(teksLiBaru);
//
const ul = document.querySelector("section#b ul");
const li2 = ul.querySelector("li:nth-child(2)");

ul.insertBefore(liBaru, li2);
liBaru.style.backgroundColor = "lightblue";
//
const link = document.getElementsByTagName("a")[0];
sectionA.removeChild(link);
//

const sectionB = document.getElementById("b");
const p4 = sectionB.querySelector("p");

const h2Baru = document.createElement("h2");
const textH2Baru = document.createTextNode("Ini Teks H2 Baru!");
h2Baru.appendChild(textH2Baru);
h2Baru.style.backgroundColor = "lightblue";
sectionB.replaceChild(h2Baru, p4);
