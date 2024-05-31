import "./bootstrap";

import Alpine from "alpinejs";

window.Alpine = Alpine;

Alpine.start();

// Slider
const toggleOpen = document.getElementById("toggleOpen");
const toggleClose = document.getElementById("toggleClose");
const collapseMenu = document.getElementById("collapseMenu");

function handleClick() {
    if (collapseMenu.style.display === "block") {
        collapseMenu.style.display = "none";
    } else {
        collapseMenu.style.display = "block";
    }
}

toggleOpen.addEventListener("click", handleClick);
toggleClose.addEventListener("click", handleClick);
