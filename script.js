var menuButton = document.getElementById("menuButton");
var line1 = document.getElementById("line1");
var line2 = document.getElementById("line2");
var line3 = document.getElementById("line3");
var isMenuOpen = false;

function toggleMenu() {
  menuButton.style.display = isMenuOpen ? "none" : "block";
  menuButton.classList.toggle("show", !isMenuOpen); /* Adding 'show' class when the menu is opened */
  line1.classList.toggle("rotate");
  line2.classList.toggle("rotate");
  line3.classList.toggle("rotate");
  isMenuOpen = !isMenuOpen;
}
