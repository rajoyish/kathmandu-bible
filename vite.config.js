import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";

export default defineConfig({
  plugins: [
    laravel({
      input: [
        "resources/css/app.css",
        "resources/js/app.js",
        "resources/js/nav.js",
        "resources/js/embla-slider.js",
        "resources/js/photoswipe.js",
        "resources/js/gallery-carousel.js",
      ],
      refresh: true,
    }),
  ],
});
