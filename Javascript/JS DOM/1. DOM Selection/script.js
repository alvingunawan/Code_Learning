////DOM Selection
///document.getElementById(); -> element
// const judul = document.getElementById("judul");
// judul.style.color = "red";
// judul.style.backgroundColor = "#ccc";
// judul.innerHTML = "ini Judul dari Javascript";

///document.getElementsByTagName(); -> HTML Collection[]{}
// const p = document.getElementsByTagName("p");

// for (i = 0; i < p.length; i++) {
//   p[i].style.backgroundColor = "green";
// }

///document.getElementsByClassName(); -> returnnya HTML Collection
// const p1 = document.getElementsByClassName("p1")[0];
// p1.innerHTML = "Ini merubah p1";
// p1.style.color = "white";

///document.querySelector(); -> element
// const p4 = document.querySelector("#b p");
// p4.style.backgroundColor = "lightblue";
// p4.style.fontSize = "4rem";

// const li2 = document.querySelector("section#b ul li:nth-child(2)");
// li2.style.backgroundColor = "yellow";

///document.querySelectorAll(); -> return nya node list
// const p = document.querySelectorAll("p");
// for (let i = 0;i>){}

// p[2].style.backgroundColor = "lightblue";

///mengubah root node
const sectionB = document.querySelector("section#b");
const p4 = sectionB.getElementsByTagName("p")[0];
p4.style.backgroundColor = "orange";
