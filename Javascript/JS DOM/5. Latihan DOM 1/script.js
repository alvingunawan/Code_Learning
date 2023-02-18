const tombolUbahWarna = document.getElementById("tombolUbahWarna");
// const body = document.getElementsByName("body")[0]; //khusus body bisa pakai document.body

// cara 1 pakai event handler

// tombolUbahWarna.onclick = function () {
//   document.body.style.backgroundColor = "lightgreen";
// };

// cara 2 pakai event listener
tombolUbahWarna.addEventListener("click", function () {
  //   document.body.style.backgroundColor = "lightblue";
  //   document.body.setAttribute("class", "biru-muda");
  document.body.classList.toggle("biru-muda");
});

const tombolUbahWarna2 = document.createElement("button");
const teksTombolUbahWarna2 = document.createTextNode("Tombol Ubah Warna 2");
tombolUbahWarna2.appendChild(teksTombolUbahWarna2);
tombolUbahWarna2.setAttribute("type", "button");
// document.body.appendChild(tombolUbahWarna2); //fungsinya sama kayak yang after dibawah
tombolUbahWarna.after(tombolUbahWarna2);

tombolUbahWarna2.addEventListener("click", function () {
  const r = Math.round(Math.random() * 255 + 1);
  const g = Math.round(Math.random() * 255 + 1);
  const b = Math.round(Math.random() * 255 + 1);
  document.body.style.backgroundColor = "rgb(" + r + "," + g + ", " + b + ")";
});

//////////////////////////////////////////////////////////////////////////////////
const sMerah = document.querySelector("input[name=sMerah]");
const sHijau = document.querySelector("input[name=sHijau]");
const sBiru = document.querySelector("input[name=sBiru]");
sMerah.addEventListener("input", function () {
  const r = sMerah.value;
  const g = sHijau.value;
  const b = sBiru.value;
  document.body.style.backgroundColor = "rgb(" + r + "," + g + ", " + b + ")";
});

sHijau.addEventListener("input", function () {
  const r = sMerah.value;
  const g = sHijau.value;
  const b = sBiru.value;
  document.body.style.backgroundColor = "rgb(" + r + "," + g + ", " + b + ")";
});

sBiru.addEventListener("input", function () {
  const r = sMerah.value;
  const g = sHijau.value;
  const b = sBiru.value;
  document.body.style.backgroundColor = "rgb(" + r + "," + g + ", " + b + ")";
});

////////////////////////////////////////////////////////////////////////////////
document.body.addEventListener("mousemove", function (event) {
  // posisi mouse
  // console.log(event.clientY);
  // ukuran browser
  // console.log(window.innerWidth);
  const xPos = Math.round((event.clientX / window.innerWidth) * 255);
  const yPos = Math.round((event.clientY / window.innerHeight) * 255);
  document.body.style.backgroundColor = "rgb(" + xPos + "," + +", " + "100" + ")";
});
