//Event Handling
// const card = document.querySelector(".card");
// const close = document.querySelector(".close");
// // Cara 1
// // const container = document.querySelector(".container");
// // close.addEventListener("click", function () {
// //   container.removeChild(card1);
// // });

// close.addEventListener("click", function () {
//   card.style.display = "none";
// });

// DOM Traversal
// DOM Traversal Method : parentNode, parentElement, nextSibling, nextElementSibling, previousSibling, previousElementSibling
const close = document.querySelectorAll(".close");
// Cara 1
// for (let i = 0; i < close.length; i++) {
//   close[i].addEventListener("click", function (e) {
//     // close[i].parentElement.style.display = "none";
//     e.target.parentElement.style.display = "none";
//   });
// }

// Cara 2
close.forEach(function (el) {
  el.addEventListener("click", function (e) {
    e.target.parentElement.style.display = "none";
  });
});

// Contoh lain. Bisa dicoba salah satu buat tau bedanya
const nama = document.querySelector(".nama");
// console.log(nama.parentElement.parentElement);
// console.log(nama.parentNode);
// console.log(nama.nextSibling); // kalo ada enter nanti keikut
//console.log(nama.nextElementSibling);
console.log(nama.previousElementSibling);
