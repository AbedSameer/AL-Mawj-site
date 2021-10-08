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
    var ele1 = menu.children[5];
    console.log(menu.children);
    console.log(ele1);
    menu.appendChild(ele1);
    document.getElementById("moreList").prepend(ele1);
  }
  if (window.innerWidth <= 900) {
    var ele1 = menu.children[4];
    console.log(menu.children);
    console.log(ele1);
    menu.appendChild(ele1);
    document.getElementById("moreList").prepend(ele1);
  }
})();

var ele;
const elements = [];

// window.onload(setInterval(RunSlider, 3000));
function getEle() {
  for (var i = 0; i <= elements.length; i++)
    elements.splice(0, elements.length);

  ele = document.getElementsByClassName("item");

  for (var i = 0; i < ele.length; i++) {
    elements.push(ele[i]);
  }
}
function RunSlider(ele) {
  const slider = document.getElementById("linerSlider");
  getEle();
  if (window.innerWidth >= 769) {
    if (ele.id == "sliderNext") {
      //console.log(elements[0]);
      var itemWedth = elements[0].scrollWidth;
      var itemMargin = "0px -" + itemWedth + "px 0px 0px";
      elements[0].setAttribute("style", "margin:" + itemMargin);
      elements[5].style.margin = "0px";

      setTimeout(function () {
        document.getElementById("linerSlider").appendChild(elements[0]);
      }, 1000);
    } else {
      var lastChiledInSlider = slider.lastElementChild;
      var lastChiledWidth = lastChiledInSlider.scrollWidth;
      lastChiledInSlider.style.width = "0px";
      slider.removeChild(slider.lastChild.previousSibling);
      var itemWedth = elements[1].scrollWidth;
      var itemMargin = "0px " + itemWedth + "px 0px 0px";
      slider.insertBefore(lastChiledInSlider, slider.firstChild);
      for (var i = 0; i < lastChiledWidth; i++) {
        setTimeout(function () {
          slider.firstChild.style.width = i + "px";
        });
      }
    }
  } else {
    for (var i = 0; i < elements.length; i++) {
      elements[i].style.padding = "0px";
      elements[i].style.margin = "0px";
    }
    elements[0].style.padding = "0px ";
    elements[0].style.width = "calc(100%)";
    elements[0].style.margin = "0px 20px 0px 0px";
  }
}
