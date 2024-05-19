"use strict";/* global Swiper Swiper:false TimelineLite Waypoint jQuery */ /*
 * Swiper for customer quotes in hero
 */ /*
 * Play video when user clicks poster image
 */ // (function () {
// 	"use strict";
// 	var poster = document.querySelector('.poster');
// 	var playIcon = document.querySelector('.play-icon');
// 	poster.addEventListener("click", playVideo);
// 	playIcon.addEventListener("click", playVideo);
// 	function playVideo() {
// 		var iframe = document.querySelector('iframe');
// 		var player = new Vimeo.Player(iframe);
// 		poster.classList.add("hidden");
// 		playIcon.classList.add("hidden");
// 		player.play();
// 	}
// }());
/** Resources slider */ /** Learn more expand bulleted list */ // globe animation
(function(){"use strict";new Swiper(".heroBox .swiper-container",{// Optional parameters
loop:!0,// If we need pagination
pagination:{el:".heroBox .swiper-pagination",clickable:!0,type:"bullets"},autoplay:{delay:5e3,disableOnInteraction:!1,pauseOnMouseEnter:!0}})})(),function(a){"use strict";// video overlay hide on play
// video playlist
a(".play-icon, .video-link").on("click",function(){a(".video-overlay").addClass("hidden")}),a(".video-link").on("click",function(){var b=a(this),c=b.text();a(".active-video").text(c).removeClass("menu-active"),a(".video-links-list").fadeOut("fast")}),a(".active-video").on("click",function(){a(".video-links-list").fadeToggle("fast"),a(this).toggleClass("menu-active")}),a(document).mouseup(function(b){var c=a(".video-playlist");c.is(b.target)||0!==c.has(b.target).length||(a(".video-links-list").hide(),a(".active-video").removeClass("menu-active"))})}(jQuery),function(){"use strict";// init news and events carousel
new Swiper(".resources-slider-container",{slidesPerView:"auto",navigation:!1,pagination:{el:".resources .swiper-pagination",type:"bullets"},centeredSlides:!1,spaceBetween:30})}(),function(a){"use strict";a(".learn-more").on("click",function(){var b=a(this).attr("data-id");a(this).addClass("hidden"),a("."+b).removeClass("hidden")})}(jQuery),function(){"use strict";function a(){window.CustomEvent?b=new CustomEvent("timeLineLiteCompleteEvent"):(b=document.createEvent("CustomEvent"),b.initCustomEvent("timeLineLiteCompleteEvent",!0,!0)),f.dispatchEvent(b)}var b,c=!1,d=new TimelineLite,e=window.Power4.easeInOut,f=document.querySelector(".edr-diagram")||null,g=document.querySelector(".multi-vector-edr-diagram")||null;new Waypoint({element:document.getElementById("edr-diagram"),offset:"75%",handler:function handler(b){"down"!==b||c||(c=!0,d.fromTo(f,1,{x:"25%",autoAlpha:0},{x:"0%",autoAlpha:1,ease:e}),d.to(f,1,{//transform: "rotate(180deg)",
rotation:"+=180",transformOrigin:"center center",// autoAlpha: 1,
// ease: ease,
onComplete:a}),d.to(f,1,{autoAlpha:0}),d.to(g,1,{autoAlpha:1},"-=1"))}})}();
//# sourceMappingURL=index.js.map