// When the user scrolls the page, execute myFunction
window.onscroll = function() {myFunction()};

// Get the navbar
var navbar = document.getElementById("masthead");

// Get the offset position of the navbar
var sticky = navbar.offsetTop;

var color = navbar.backgroundColor

// Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
function myFunction() {
    if (window.pageYOffset >= 656) {
        //navbar.classList.add("sticky");
        navbar.style.backgroundColor="rgba(1,1,1,.9)";
    } else if (window.pageYOffset <= 655) {
        navbar.style.backgroundColor="rgba(1,1,1,.3";
    }
}