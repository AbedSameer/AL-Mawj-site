window.addEventListener("scroll", () => {
  const scrolled = window.scrollY;
  var test = document.getElementsByClassName("section_discription");
  var mainMenu = document.getElementById("header");
  if (scrolled > 104) {
    mainMenu.style.position = "sticky";
    mainMenu.style.top = " -106px ";
  } else {
    mainMenu.style.position = "";
    mainMenu.style.top = "";
  }
});
