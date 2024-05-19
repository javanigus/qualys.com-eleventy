"use strict";/* eslint-disable */ /* global Swiper */ /* eslint-enable */ /*
 * Swiper for customer quotes in hero
 */webpackJsonp([0],{/***/26:(/***/function _(a,b,c){"use strict";var d=c(2),e=function(a){return a&&a.__esModule?a:{default:a}}(d);(0,e.default)()}),/***/41:(/***/function _(){// removed by extract-text-webpack-plugin
/***/}),/***/80:(/***/function _(a,b,c){c(26),a.exports=c(41)})},[80]),function(){"use strict";// init news and events carousel
// init SaaSDR apps icons slider
new Swiper(".q-default-hero__box-wrap .swiper-container",{// Optional parameters
loop:!0,// If we need pagination
pagination:{el:".q-default-hero__box-wrap .swiper-pagination",clickable:!0},autoplay:{delay:5e3,disableOnInteraction:!1,pauseOnMouseEnter:!0}}),new Swiper(".resources .resources-slider-container",{slidesPerView:"auto",navigation:!1,pagination:{el:".resources .swiper-pagination",type:"bullets"},centeredSlides:!1,spaceBetween:30}),new Swiper(".saasdr-apps-slider",{slidesPerView:3,navigation:!1,pagination:!1,centeredSlides:!1,spaceBetween:10,breakpoints:{580:{slidesPerView:2},400:{slidesPerView:1}}})}();
//# sourceMappingURL=index.js.map