"use strict";/* global Swiper:false  */(function(){"use strict";// swiper for testimonial
var a=null,b=function(){a=new Swiper(".js-testimonial-container",{slidesPerView:1,centeredSlides:!1,autoplay:{delay:3500,// duration of each slide in ms
disableOnInteraction:!1,pauseOnMouseEnter:!0},loop:!0,pagination:{el:".js-testimonial-container .swiper-pagination",clickable:!0}})},c=function(){!a&&document.querySelector(".js-testimonial-container")&&b()};window.addEventListener("load",c),window.addEventListener("resize",c)})();
//# sourceMappingURL=index.js.map