// mencetak * sebanyak 5 kali kesamping
/*var s = "";

for (var i = 1; i <= 10; i++) {
  s += "*";
}
console.log(s);
*/

// mencetak * sebanyak 10 kali kebawah
/*var s = "";

for (var i = 1; i <= 10; i++) {
  s += "*";
  s += "\n";
}
console.log(s);
*/

// mencetak * sebanyak 10 kali kebawah, tapi tiap barisnya * nya 5 kali

/*var s = "";

for (var i = 1; i <= 10; i++) {
  for (var j = 1; j <= 5; j++) {
    s += "*";
  }
  s += "\n";
}
console.log(s);
*/

// pengen buat 7 baris, tiap barisnya ada 10 bintang

/*var s = "";

for (var i = 1; i <= 7; i++) {
  for (var j = 1; j <= 10; j++) {
    s += "*";
  }
  s += "\n";
}
console.log(s);
*/

// buat seperti dibawah outputnya :
/*

*
**
***
****
*****
dst

*/

/*var s = "";

for (var i = 1; i <= 5; i++) {
  for (var j = 1; j <= i; j++) {
    s += "*";
  }
  s += "\n";
}
console.log(s);
*/

// buat seperti dibawah outputnya :
/*

*****
****
***
**
*
dst

*/

var s = "";

for (var i = 10; i >= 0; i--) {
  for (var j = 0; j < i; j++) {
    s += "*";
  }
  s += "\n";
}
console.log(s);
