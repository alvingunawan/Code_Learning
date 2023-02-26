//Menyiapkan Canvas
const mycanvas = document.querySelector("#mycanvas");

// atur ukuran canvas
mycanvas.width = window.innerWidth;
mycanvas.height = window.innerHeight;

// tentukan Context
const c = mycanvas.getContext("2d");

// Manipulasi Canvas
// c.fillStyle = "pink";
// c.strokeStyle = "999";
// c.lineWidth = "5";

// c.rect(50, 50, 300, 300);
// c.fill();
// c.stroke();

// // Membuat Lingkaran
// c.fillStyle = "lightgreen";
// c.beginPath();
// c.arc(550, 200, 150, 0, 2 * Math.PI);
// c.fill();

// // Membuat Path (Segitiga)
// c.fillStyle = "lightblue";
// c.beginPath();
// c.moveTo(900, 50);
// c.lineTo(1050, 350);
// c.lineTo(750, 350);
// c.closePath();
// c.fill();
// c.stroke();

// Animasi Lingkaran
let x = 300;
let y = 200;
let speedX = 5;
let speedY = 5;
let radius = 150;

function draw() {
  window.requestAnimationFrame(draw);
  c.clearRect(0, 0, innerWidth, innerHeight);
  console.log("ok");
  c.fillStyle = "lightgreen";
  c.beginPath();
  c.arc(x, y, radius, 0, 2 * Math.PI);
  c.fill();

  if (x + radius > innerWidth || x - radius < 0) {
    speedX = -speedX;
  }
  if (y + radius > innerHeight || y - radius < 0) {
    speedY = -speedY;
  }

  x += speedX;
  y += speedY;
}

draw();
