
// What is DRRH?
function showPopup1() {
  var popup = document.getElementById("myPopup1");
  popup.classList.toggle("show");
}

// What are the prodedures?
function showPopup2() {
  var popup = document.getElementById("myPopup2");
  popup.classList.toggle("show");
}

// How will the rating measure the hotel's level of disaster resilience?
function showPopup3() {
  var popup = document.getElementById("myPopup3");
  popup.classList.toggle("show");
}
// What does the hotel need to provide/submit to be rated?
function showPopup4() {
  var popup = document.getElementById("myPopup4");
  popup.classList.toggle("show");
}
// How will the hotel benefit from the rating?
function showPopup5() {
  var popup = document.getElementById("myPopup5");
  popup.classList.toggle("show");
}
// What will the auditors/inspectors do when conducting the rating?
function showPopup6() {
  var popup = document.getElementById("myPopup2");
  popup.classList.toggle("show");
}
// How much will the rating cost?
function showPopup7() {
  var popup = document.getElementById("myPopup7");
  popup.classList.toggle("show");
}
// Can the hotel suddenly back-out during the conduct of the rating? Will the payment be refunded?
function showPopup8() {
  var popup = document.getElementById("myPopup8");
  popup.classList.toggle("show");
}
// What is the process for getting a hotel rated?
function showPopup9() {
  var popup = document.getElementById("myPopup2");
  popup.classList.toggle("show");
}
// How long is the whole rating process?
function showPopup10() {
  var popup = document.getElementById("myPopup10");
  popup.classList.toggle("show");
}
// What will happen after the field audit?
function showPopup11() {
  var popup = document.getElementById("myPopup11");
  popup.classList.toggle("show");
}
// Where will the rating of the hotel be published?
function showPopup12() {
  var popup = document.getElementById("myPopup12");
  popup.classList.toggle("show");
}
// What does the hotel need to provide/submit to be rated?



// Get the elements with class="column"
var elements = document.getElementsByClassName("column");

// Declare a loop variable
var i;

function listView() {
  for (i = 0; i < elements.length; i++) {
    elements[i].style.width = "100%";
  }
}

// Grid View
function gridView() {
  for (i = 0; i < elements.length; i++) {
    elements[i].style.width = "50%";
  }
}