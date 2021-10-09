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
