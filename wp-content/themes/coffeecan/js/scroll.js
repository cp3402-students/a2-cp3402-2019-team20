// When the user scrolls the page, execute myFunction
window.onscroll = function() {myFunction()};

// Get the navbar
// Get the header image
var navbar = document.getElementById("masthead");
<<<<<<< HEAD
var img = document.getElementById("header-image");
=======
var img = document.getElementById("header-image-con");
>>>>>>> themeDevMatt
var imgHeight = img.clientHeight;
var navHeight = navbar.clientHeight;

// Get the offset position of the navbar
<<<<<<< HEAD

var sticky = navbar.offsetTop;
var color = navbar.backgroundColor;
=======
var sticky = navbar.offsetTop;
var color = navbar.backgroundColor
>>>>>>> themeDevMatt

// Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
function myFunction() {
    if (window.pageYOffset >= (imgHeight - navHeight)) {
<<<<<<< HEAD
        navbar.style.backgroundColor="rgba(1,1,1,.9)";
        console.log(height)
    } else if (window.pageYOffset < (imgHeight - navHeight)) {
        navbar.style.backgroundColor="rgba(1,1,1,.3";
=======
        transitionToDark()
    } else if (window.pageYOffset < (imgHeight - navHeight)) {
        transitionToLight()
>>>>>>> themeDevMatt
    }
}
function transitionToDark() {
    navbar.style.backgroundColor="rgba(1,1,1,.9)";
}
function transitionToLight() {
    navbar.style.backgroundColor="rgba(1,1,1,.3";
}