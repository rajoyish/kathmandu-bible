import "../css/gallery-carousel.css";
import EmblaCarousel from "embla-carousel";
import Autoplay from "embla-carousel-autoplay";
import { setupTweenOpacity } from "./EmblaCarouselTweenOpacity";
import { addDotBtnsAndClickHandlers } from "./EmblaCarouselDotButton";
import { addPrevNextBtnsClickHandlers } from "./EmblaCarouselArrowButtons";

const OPTIONS = { loop: true };

document.addEventListener("DOMContentLoaded", () => {
  const emblaNode = document.querySelector(".embla");
  if (emblaNode) {
    const viewportNode = emblaNode.querySelector(".embla__viewport");
    const prevBtn = emblaNode.querySelector(".embla__button--prev");
    const nextBtn = emblaNode.querySelector(".embla__button--next");
    const dotsNode = document.querySelector(".embla__dots");

    const emblaApi = EmblaCarousel(viewportNode, OPTIONS, [
      Autoplay({
        playOnInit: true,
        delay: 5000,
        stopOnMouseEnter: true,
        stopOnInteraction: false,
      }),
    ]);
    const removeTweenOpacity = setupTweenOpacity(emblaApi);

    const removePrevNextBtnsClickHandlers = addPrevNextBtnsClickHandlers(
      emblaApi,
      prevBtn,
      nextBtn
    );
    const removeDotBtnsAndClickHandlers = addDotBtnsAndClickHandlers(
      emblaApi,
      dotsNode
    );

    emblaApi
      .on("destroy", removeTweenOpacity)
      .on("destroy", removePrevNextBtnsClickHandlers)
      .on("destroy", removeDotBtnsAndClickHandlers);
  }
});
