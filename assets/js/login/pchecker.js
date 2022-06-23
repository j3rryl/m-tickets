console.log("Hii");
var myInput = document.getElementById("password");
var licon = document.getElementById("letter");
var character = document.getElementById("characters");
var number = document.getElementById("number");

myInput.onfocus = function () {
  document.getElementById("password-requirements").style.display = "block";
};
myInput.onblur = function () {
  document.getElementById("password-requirements").style.display = "none";
};
myInput.onkeyup = function () {
  var lowerCaseLetters = /[a-z]/g;
  var numbers = /[0-9]/g;
  if (myInput.value.match(lowerCaseLetters)) {
    licon.style.color = "#68AB6A";
  } else {
    licon.style.color = "lightgray";
  }
  if (myInput.value.match(numbers)) {
    number.style.color = "#68AB6A";
  } else {
    number.style.color = "lightgray";
  }
  if (myInput.value.length >= 8) {
    character.style.color = "#68AB6A";
  } else {
    character.style.color = "lightgray";
  }
};
