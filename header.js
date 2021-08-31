window.addEventListener("scroll", () => {
  const scrolled = window.scrollY,
    secreenSize = window.screen.availWidth;
  var test = document.getElementsByClassName("section_discription");
  var mainMenu = document.getElementById("header");
  if (scrolled != 0 && secreenSize > 768) {
    document.documentElement.style.setProperty("--headerHeight", "80px");
  } else if (scrolled != 0 && secreenSize <= 768) {
    document.documentElement.style.setProperty("--headerHeight", "60px");
  } else {
    if (secreenSize > 768)
      document.documentElement.style.setProperty("--headerHeight", "100px");
    if (secreenSize <= 768)
      document.documentElement.style.setProperty("--headerHeight", "80px");
  }
});
