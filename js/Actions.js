function ShowFilterFoeMobile(ele) {
  var state = document.getElementById("state");
  console.log(state.style.height);

  if (state.style.height == 0 || state.style.height == "0px") {
    //console.log(state.style.height);
    state.style.height = "130px";
    //  state.style.padding = '10px';
  } else if (state.style.height >= "130px") {
    //console.log(state.style.height);

    console.log(state.style.height + "      2222 ");
    state.style.height = "0px";
    //  state.style.padding = '0px 10px';
  }
}

function showMobileBarServeces(ele) {
  const check = document.getElementById("showMobileSeveces");
  const more = document.getElementById("showMobileBarServeces");
  const main = document.getElementById("MainMobileBar");
  if (check.checked == false) {
    more.style.margin = "0px 70vw 0px 0px";
    main.style.margin = "0px 0vw 0px 0px";
  } else if (check.checked == true) {
    more.style.margin = "0px -20px 0px 0px";
    main.style.margin = "0px -60vw 0px 0px";
  }
}

function showFloating(ele) {
  var chOne = ele.parentNode.children[1],
    chTow = ele.parentNode.children[2];
  if (
    window.getComputedStyle(chOne).bottom == "96px" &&
    window.getComputedStyle(chTow).bottom == "145px"
  ) {
    chOne.style.bottom = "42px";
    chTow.style.bottom = "42px";
  } else {
    chOne.style.bottom = "96px";
    chTow.style.bottom = "145px";
  }
}

(function customNav() {
  var menu = document.getElementById("MenuList");
  if (window.innerWidth <= 1120) {
    var ele1 = menu.children[4];
    console.log(menu.children);
    console.log(ele1);
    menu.appendChild(ele1);
    document.getElementById("moreList").prepend(ele1);
  } else if (window.innerWidth <= 900) {
    var ele1 = menu.children[4];
    console.log(menu.children);
    console.log(ele1);
    menu.appendChild(ele1);
    document.getElementById("moreList").prepend(ele1);
  }
})();

var ele;
const elements = [];

window.onload(setInterval(myfunction, 3000));
function getEle() {
  for (var i = 0; i <= elements.length; i++)
    elements.splice(0, elements.length);

  ele = document.getElementsByClassName("item");

  for (var i = 0; i < ele.length; i++) {
    elements.push(ele[i]);
  }
}
function myfunction() {
  getEle();
  //console.log(window.innerWidth);
  elements[0].style.width = "0px";
  elements[0].style.height = "0px";
  elements[0].style.padding = "0px";

  if (window.innerWidth >= 769) {
    elements[7].style.width = "0px";
    elements[7].style.height = "0px";
    elements[7].style.padding = "0px";
    elements[6].style.padding = "30px 30px";
    elements[6].style.width = "calc(100% / 6.2)";
    elements[6].style.height = "160px";
  } else {
    for (var i = 0; i < elements.length; i++) {
      elements[i].style.width = "0px";
      elements[i].style.height = "0px";
      elements[i].style.padding = "0px";
      elements[i].style.margin = "0px";
    }

    elements[1].style.padding = "30px 30px";
    elements[1].style.width = "calc(100% / 1.2)";
    elements[1].style.height = "160px";
    elements[1].style.margin = "0px 20px 0px 0px";
  }

  setTimeout(function () {
    document.getElementById("linerSlider").appendChild(elements[0]);
  }, 1500);
}
