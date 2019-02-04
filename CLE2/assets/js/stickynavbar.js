window.onscroll = function() {stickyNavBar()};

let navbar = document.getElementById("navBar");
let sticky = navbar.offsetTop;

function stickyNavBar() {
    if (window.pageYOffset >= sticky) {
        navbar.classList.add("sticky")
    } else {
        navbar.classList.remove("sticky");
    }
}