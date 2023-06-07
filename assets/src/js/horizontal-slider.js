"use strict";

import Splide from "@splidejs/splide";

class HorizontalSlider {
  constructor(slider, sliderItems, sliderNum) {
    this.slider = slider;
    this.sliderItems = sliderItems;
    this.sliderNumber = sliderNum;
    this._horizontalSliderInit();
  }

  _horizontalSliderInit() {
    const splideSlider = document.querySelector(this.slider);
    const splideSliderItems = document.querySelectorAll(this.sliderItems);
    const splideSliderNumber = this.sliderNumber;
    // Existence checks
    if (splideSlider && splideSliderItems.length >= splideSliderNumber) {
      const mySplide = new Splide(splideSlider, {
        autoplay: true,
        interval: 5000,
        pauseOnHover: false,
        type: "loop",
        speed: 1000,
        pagination: false,
        arrows: true,
        perMove: 1,
        // fixedWidth: "33.2rem",
        // gap: 16,
        mediaQuery: "min",
      });
      mySplide.mount();
    }
  }
}

export default HorizontalSlider;
