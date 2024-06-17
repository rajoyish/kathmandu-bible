import "photoswipe/style.css";

import PhotoSwipeLightbox from "photoswipe/lightbox";

const lightbox = new PhotoSwipeLightbox({
  gallery: "#kbi-gallery",
  children: "a",
  pswpModule: () => import("photoswipe"),
});

lightbox.init();
