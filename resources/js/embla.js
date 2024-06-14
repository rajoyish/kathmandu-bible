import EmblaCarousel from "embla-carousel";
import Autoplay from "embla-carousel-autoplay";
import Fade from "embla-carousel-fade";

// Embla Carousel
document.addEventListener("DOMContentLoaded", () => {
  const emblaNode = document.querySelector(".embla");
  if (emblaNode) {
    const options = { loop: true };
    const plugins = [Autoplay(), Fade()];
    const emblaApi = EmblaCarousel(emblaNode, options, plugins);
  }
});
