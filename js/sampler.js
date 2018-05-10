//Here goes the custom javascript code
"use strict";

document.addEventListener("DOMContentLoaded", function(event) { 
	jQuery('.sampler-slider').slick({
        dots: true,
        infinite: true,
        speed: 300,
        slidesToShow: 1,
        adaptiveHeight: true,
        arrows: false
      });

});