var makanan = prompt("Pilih jenis makananmu. Cth: nasi, brokoli, daging, hamburger, softdrink");

switch (makanan) {
  case "nasi":
  case "brokoli":
  case "daging":
    alert("Makananmu " + makanan + " termasuk sehat");
    break;
  case "hamburger":
  case "softdrink":
    alert("Makananmu " + makanan + " termasuk tidak sehat");
    break;
  default:
    alert("Makananmu " + makanan + " tidak ada di kategori kami");
}
