// Get the modal
var deleteModal = document.getElementById("deleteModal");

// Get the button that opens the modal
var btn = document.getElementById("openModal_delete");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close_delete_modal")[0];

// When the user clicks on the button, open the modal
btn.onclick = function() {
  deleteModal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  deleteModal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    deleteModal.style.display = "none";
  }
}
