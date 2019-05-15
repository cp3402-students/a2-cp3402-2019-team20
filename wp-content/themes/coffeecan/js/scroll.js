// When the user scrolls the page, execute myFunction
window.onscroll = function() {myFunction()};

// Get the navbar
var navbar = document.getElementById("masthead");
var img = document.getElementById("header-image");
var imgHeight = img.clientHeight;
var navHeight = navbar.clientHeight;

// Get the offset position of the navbar

var sticky = navbar.offsetTop;
var color = navbar.backgroundColor;

// Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
function myFunction() {
    if (window.pageYOffset >= (imgHeight - navHeight)) {
        navbar.style.backgroundColor="rgba(1,1,1,.9)";
        console.log(height)
    } else if (window.pageYOffset < (imgHeight - navHeight)) {
        navbar.style.backgroundColor="rgba(1,1,1,.3";
    }
}