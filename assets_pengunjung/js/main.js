const pengelola = document.querySelectorAll(".pengelola-tokoh");

pengelola.forEach((tokoh) => {
  tokoh.addEventListener("click", () => {
    const deskripsi = tokoh.nextElementSibling;
    tokoh.classList.toggle("active");
    const arrowIcon = tokoh.querySelector("i");

    if (tokoh.classList.contains("active")) {
      deskripsi.style.maxHeight = deskripsi.scrollHeight + "px";
      arrowIcon.style.transform = "rotate(180deg)";
      arrowIcon.style.transition = "transform 0.3s ease-in"; // Menambahkan efek ease-in pada rotasi ikon
    } else {
      deskripsi.style.maxHeight = 0;
      arrowIcon.style.transform = "rotate(0deg)";
      arrowIcon.style.transition = "transform 0.3s ease-in"; // Menambahkan efek ease-in pada rotasi ikon
    }
  });
});
