// Get the modal
var loginbox = document.getElementById('id01');

// When the user clicks anywhere outside of the login box, close it
window.onclick = function(event) {
    if (event.target == loginbox) {
        loginbox.style.display = "none";
    }
}