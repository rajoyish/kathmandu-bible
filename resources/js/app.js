import "./bootstrap";
import EmblaCarousel from "embla-carousel";
import Autoplay from "embla-carousel-autoplay";
import Fade from "embla-carousel-fade";
import Alpine from "alpinejs";

window.Alpine = Alpine;

Alpine.start();

// interactivity to mobile menu
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

// Embla Carousel
const emblaNode = document.querySelector(".embla");
const options = { loop: true };
const plugins = [Autoplay(), Fade()];
const emblaApi = EmblaCarousel(emblaNode, options, plugins);
