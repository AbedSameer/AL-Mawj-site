window.addEventListener("scroll", () => {
  const scrolled = window.scrollY;
  var test = document.getElementsByClassName("section_discription");
  var mainMenu = document.getElementById("header");
  if (scrolled != 0) {
    document.documentElement.style.setProperty("--headerHeight", "80px");
  } else {
    document.documentElement.style.setProperty("--headerHeight", "100px");
  }
});
