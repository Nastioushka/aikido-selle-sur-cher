'use strict'

var goUp        = null;
var body        = null;
var html        = null;
var scrolleG     = 0;
var scrolleS     = 0;

goUp = document.getElementById("goUp");
body = document.body;
html = document.documentElement;

console.log(goUp);
console.log(body);
console.log(html);
console.log(html.scrollTop);

//Fonctions actions en scrolle
function onScroll()
{
  if(html.scrollTop > scrolleG || body.scrollTop > scrolleS)
  {
    goUp.style.display = "none";
  }
  else
  {
    goUp.style.display = "block";
  };
  scrolleG = html.scrollTop;
  scrolleS = body.scrollTop;
};

window.onscroll = function() {onScroll()};
