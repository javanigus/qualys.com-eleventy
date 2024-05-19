"use strict";/* global Swiper Swiper:false */ /*
 * Swiper for customer quotes in hero
 */ // (function () {
// 	"use strict";
// 	var quoteBoxSwiper = new Swiper('.heroBox .swiper-container', {
// 		// Optional parameters
// 		loop: true,
// 		// If we need pagination
// 		pagination: {
// 			el: '.heroBox .swiper-pagination',
// 			clickable: true
// 		},
// 		autoplay: {
// 			delay: 5000,
// 		},
// 	});
// 	// pause slider on hover
// 	var quoteBox = document.querySelector(".heroBox .swiper-container");
// 	quoteBox.addEventListener("mouseenter", function () {
// 		quoteBoxSwiper.autoplay.stop();
// 	});
// 	quoteBox.addEventListener("mouseleave", function () {
// 		quoteBoxSwiper.autoplay.start();
// 	});
// }());
/** Resources slider */(function(){"use strict";// init news and events carousel
new Swiper(".resources-slider-container",{slidesPerView:"auto",navigation:!1,pagination:{el:".resources .swiper-pagination",type:"bullets"},centeredSlides:!1,spaceBetween:30})})();
//# sourceMappingURL=index.js.map