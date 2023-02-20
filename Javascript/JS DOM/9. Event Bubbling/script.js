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
// const close = document.querySelectorAll(".close");
// Cara 1
// for (let i = 0; i < close.length; i++) {
//   close[i].addEventListener("click", function (e) {
//     // close[i].parentElement.style.display = "none";
//     e.target.parentElement.style.display = "none";
//   });
// }

// Cara 2
// close.forEach(function (el) {
//   el.addEventListener("click", function (e) {
//     e.target.parentElement.style.display = "none";
//     e.preventDefault();
//     // Event Bubblingnya berhenti setelah stopPropagation,kalau mau test bisa disable stop Propagationnya
//     e.stopPropagation();
//   });
// });

// Contoh lain. Bisa dicoba salah satu buat tau bedanya
// const nama = document.querySelector(".nama");
// console.log(nama.parentElement.parentElement);
// console.log(nama.parentNode);
// console.log(nama.nextSibling); // kalo ada enter nanti keikut
//console.log(nama.nextElementSibling);
// console.log(nama.previousElementSibling);

// const cards = document.querySelectorAll(".card");
// cards.forEach(function (card) {
//   card.addEventListener("click", function (e) {
//     alert("ok");
//   });
// });

/////////////////////////////////////////////////////////
// Event bubbling intinya jika ada event di child, dan event di parent, dan
// childnya ngeklik eventnya, maka yang run event parentnya dlu baru ke event childnya
const container = document.querySelector(".container");
container.addEventListener("click", function (e) {
  // console.log(e.target);
  if (e.target.className == "close") {
    e.target.parentElement.style.display = "none";
    e.preventDefault();
  }
});
