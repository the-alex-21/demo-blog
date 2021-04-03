// Open search in nav.php
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
//Blogs on the nav when clig go to and the scrol
function scrollWin() {
  var url = window.location.href;
  if (url=="http://localhost/Final-Blog/index.php")
  {window.scrollTo(0, 550)}
  else  {
    window.location.href = "index.php" ;
  }
}
// Validate form for the search engine
function validateForm() {
  var x = document.forms["myForm"]["Search"].value;
  if (x == "") {
    alert("Write something.");
    return false;
  }  else if  (/[^a-zA-Z0-9_-\s.,;!$%^#@&*()|{}-]/.test(x)){
   alert("You have use an illegal character.");
   return false;
  }
}
