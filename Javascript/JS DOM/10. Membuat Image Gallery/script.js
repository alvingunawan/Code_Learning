const jumbo = document.querySelector(".jumbo");
const container = document.querySelector(".container");
const thumbs = document.querySelectorAll(".thumb");

container.addEventListener("click", function (e) {
  //   console.log(e.target);
  if (e.target.className == "thumb") {
    jumbo.src = e.target.src;
    jumbo.classList.add("fade");
    setTimeout(function () {
      jumbo.classList.remove("fade");
    }, 500);
    e.target.classList.add("active");

    thumbs.forEach(function (thumb) {
      // Cara 1
      //   if (thumb.classList.contains("active")) {
      //     thumb.classList.remove("active");
      //   }
      // Cara 2
      thumb.className = "thumb";
    });
    e.target.classList.add("active");

    // Cara sendiri supaya indikator yang di klik tidak nambah lagi putihnya di yang lain
    // setTimeout(function () {
    //   e.target.classList.remove("active");
    // }, 500);
  }
});
