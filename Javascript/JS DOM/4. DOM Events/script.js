// ada Inline
// Ada Event Handler contohnya onclick
// Ada Event Listener
// Inline HTML event handler ada contohnya di p3
// const p3 = document.querySelector(".p3");

// function ubahWarnaP2() {
//   p2.style.backgroundColor = "lightblue";
// }

// function ubahWarnaP3() {
//   p3.style.backgroundColor = "lightblue";
// }

// const p2 = document.querySelector(".p2");
// p2.onclick = ubahWarnaP2;

// const p4 = document.querySelector("section#b p");
// p4.addEventListener("click", function () {
//   const ul = document.querySelector("section#b ul");
//   const liBaru = document.createElement("li");
//   const teksLiBaru = document.createTextNode("Item Baru!");
//   liBaru.appendChild(teksLiBaru);
//   ul.appendChild(liBaru);
// });

///Perbedaan onClick (Event Handler) dengan EventListener

// ini Event Handler -> cuma yang terakhir yang jalan

const p3 = document.querySelector(".p3");
// p3.onclick = function () {
//   p3.style.backgroundColor = "lightblue";
// };

// p3.onclick = function () {
//   p3.style.color = "red";
// };

// ini Evenet Listener
p3.addEventListener("click", function () {
  p3.style.backgroundColor = "lightblue";
});

p3.addEventListener("click", function () {
  p3.style.color = "red";
});
