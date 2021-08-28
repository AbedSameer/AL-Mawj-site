window.addEventListener('scroll', () => {
    const scrolled = window.scrollY;
    var mainMenu = document.getElementById('h');
    if (scrolled > 104) {
        mainMenu.style.position = "sticky";
        mainMenu.style.top = " -106px ";
    }
    else {
        mainMenu.style.position = "";
        mainMenu.style.top = "";

    }

});

