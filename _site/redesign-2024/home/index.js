"use strict";/* global Swiper:false anime:false  */(function(){"use strict";// swiper for hero slider
let a=null;const b=()=>{a=new Swiper(".js-home-hero-slider",{slidesPerView:1,centeredSlides:!1,autoplay:{delay:3500,// duration of each slide in ms
disableOnInteraction:!1,pauseOnMouseEnter:!0},autoHeight:!1,loop:!1,pagination:{el:".js-home-hero-slider .swiper-pagination",clickable:!0}})},c=()=>{!a&&document.querySelector(".js-home-hero-slider")&&b()};window.addEventListener("load",c),window.addEventListener("resize",c);// animate laptop platform page screenshot in welcome slide
const d=document.querySelector(".js-platform-screenshot");d&&anime({targets:".js-platform-screenshot",translateY:"-85%",loop:!0,direction:"alternate",delay:200,duration:4e4,easing:"easeInOutSine"});//Swiper for Blog container
let e=null;const f=()=>{e=new Swiper(".js-blog-container",{slidesPerView:"auto",centeredSlides:!1,spaceBetween:32,pagination:{el:".js-blog-container .swiper-pagination",clickable:!0}})},g=()=>{!e&&document.querySelector(".js-blog-container")&&f()};window.addEventListener("load",g),window.addEventListener("resize",g);//Swiper for events carousel
let h=null;const i=()=>{h=new Swiper(".js-events-carousel",{slidesPerView:"auto",centeredSlides:!1,spaceBetween:32,pagination:!1})},j=()=>{!h&&document.querySelector(".js-events-carousel")&&i()};window.addEventListener("load",j),window.addEventListener("resize",j);// events slider
let k=null;const l=()=>{k=new Swiper(".js-events-slider",{slidesPerView:"auto",centeredSlides:!1,spaceBetween:32,pagination:{el:".js-events-slider .swiper-pagination",clickable:!0}})},m=()=>{!k&&document.querySelector(".js-events-slider")&&l()};window.addEventListener("load",m),window.addEventListener("resize",m)})();
//# sourceMappingURL=index.js.map