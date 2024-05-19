"use strict";/* global jQuery Swiper Vimeo*/ // Resources slider
/*
 * Play video if specific url hash exists
 */(function(){"use strict";// init news and events carousel
new Swiper(".resources .resources-slider-container",{slidesPerView:"auto",navigation:!1,pagination:{el:".resources .swiper-pagination",type:"bullets"},centeredSlides:!1,spaceBetween:30})})(),function(){"use strict";/*
	 * handle hash change
	 */function a(){var a;// get hash value
if(window.location.hash&&(a=window.location.hash.substring(1),"cspm-video"===a)){var b=document.querySelector(".poster"),c=document.querySelector(".play-icon"),d=document.querySelector(".q-video-poster-overlay"),e=document.querySelector("iframe"),f=new Vimeo.Player(e);b.classList.add("hidden"),c.classList.add("hidden"),d.classList.add("hidden"),f.play()}}window.addEventListener("hashchange",a),document.addEventListener("DOMContentLoaded",a)}(),function(a){"use strict";// video overlay hide on play
a(".q-apps-screenshot__list_and_icons h4").each(function(){var b=a(this),c=b.next(".section");b.on("click",function(){b.toggleClass("expanded2"),c.slideToggle()})}),a(".play-icon").on("click",function(){var b=document.querySelector(".poster"),c=document.querySelector(".play-icon"),d=document.querySelector(".q-video-poster-overlay"),e=document.querySelector("iframe"),f=new Vimeo.Player(e);b.classList.add("hidden"),c.classList.add("hidden"),d.classList.add("hidden"),f.play(),a(".video-overlay").addClass("hidden")})}(jQuery);
//# sourceMappingURL=index.js.map