// When the user scrolls the page, execute myFunction
window.onscroll = function() {myFunction()};

// Get the navbar
// Get the header image
var navbar = document.getElementById("masthead");
var img = document.getElementById("header-image-con");

var navHeight = navbar.clientHeight;

// Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
function myFunction() {
    if (img != null) {
        var imgHeight = img.clientHeight;
        if (window.pageYOffset >= (imgHeight - navHeight)) {
            transitionToDark()
        } else if (window.pageYOffset < (imgHeight - navHeight)) {
            transitionToLight()
        }
    } else {
        transitionToDark()
    }

}
function transitionToDark() {
    navbar.style.backgroundColor="rgba(51,42,29,1)";
}
function transitionToLight() {
    navbar.style.backgroundColor="rgba(51,42,29,.3";
}