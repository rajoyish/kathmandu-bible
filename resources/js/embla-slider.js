import "../css/embla-slider.css";

import EmblaCarousel from "embla-carousel";
import Autoplay from "embla-carousel-autoplay";
import Fade from "embla-carousel-fade";

// Embla Carousel
document.addEventListener("DOMContentLoaded", () => {
  const emblaNode = document.querySelector(".embla-slider");
  if (emblaNode) {
    const options = { loop: true };
    const emblaApi = EmblaCarousel(emblaNode, options, [
      Autoplay({
        playOnInit: true,
        delay: 5000,
        stopOnMouseEnter: true,
        stopOnInteraction: false,
      }),
      Fade(),
    ]);
  }
});
