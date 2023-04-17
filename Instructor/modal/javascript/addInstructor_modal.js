// Get the modal
var choose = document.getElementById("choose");

// Get the button that opens the modal
var btn = document.getElementById("open_modal");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close_modal")[0];

// When the user clicks on the button, open the modal
btn.onclick = function() {
  choose.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  choose.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    choose.style.display = "none";
  }
}
