var bermain = true;

while (bermain) {
  var inputPlayer = prompt("Selamat Datang di suitjawa, silahkan ketik salah satu (gajah,semut,orang)");

  var inputEnemy = Math.random();

  if (inputEnemy < 0.34) {
    inputEnemy = "gajah";
    console.log(inputEnemy);
  } else if (inputEnemy >= 0.34 || inputEnemy <= 0.66) {
    inputEnemy = "orang";
  } else {
    inputEnemy = "semut";
  }
  console.log(inputEnemy);

  if (inputPlayer == inputEnemy) {
    alert("kamu memilih : " + inputPlayer + "\nmusuh memilih : " + inputEnemy + "\nhasilnya Seri!");
  } else if (inputPlayer == "gajah") {
    if (inputEnemy == "semut") {
      alert("kamu memilih : " + inputPlayer + "\nmusuh memilih : " + inputEnemy + "\nKamu Kalah!");
    } else if (inputEnemy == "orang") {
      alert("kamu memilih : " + inputPlayer + "\nmusuh memilih : " + inputEnemy + "\nKamu Menang!");
    }
  } else if (inputPlayer == "semut") {
    if (inputEnemy == "orang") {
      alert("kamu memilih : " + inputPlayer + "\nmusuh memilih : " + inputEnemy + "\nKamu Kalah!");
    } else if (inputEnemy == "gajah") {
      alert("kamu memilih : " + inputPlayer + "\nmusuh memilih : " + inputEnemy + "\nKamu Menang!");
    }
  } else if (inputPlayer == "orang") {
    if (inputEnemy == "gajah") {
      alert("kamu memilih : " + inputPlayer + "\nmusuh memilih : " + inputEnemy + "\nKamu Kalah!");
    } else if (inputEnemy == "semut") {
      alert("kamu memilih : " + inputPlayer + "\nmusuh memilih : " + inputEnemy + "\nKamu Menang!");
    }
  } else {
    alert("yang kamu masukan tidak sesuai!");
  }
  bermain = confirm("Apakah kamu ingin bermain kembali?");
}
