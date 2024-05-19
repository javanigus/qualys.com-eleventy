"use strict";/* global Swiper jQuery:false */ /*
 * training tabs
 */ // (function ($) {
// 	"use strict";
// 	$(".q-apps__tabs a").on("click", function(){
// 		var tab = $(this).data("tab");
// 		$(".q-apps__tabs a").removeClass("q-active-tab");
// 		$(this).addClass("q-active-tab");
// 		$(".q-apps__grid--item").addClass("q-tab-hidden");
// 		$(tab).removeClass("q-tab-hidden");
// 	});
// 	var hash = window.location.hash;
// 	if(hash){
// 		$("[data-tab='" + hash + "-tab']").trigger("click");
// 	}
// }(jQuery));
/*
 * automatically open self-paced overlay based on hash value
 */(function(a){"use strict";a(".q-apps__tabs a").each(function(){var b=a(this),c=b.data("tab"),d=window.location.hash;// eslint-disable-next-line no-unused-vars
b.on("click",function(){a("html, body").animate({scrollTop:a(".q-agenda-container").offset().top},"slow"),a(".q-apps__tabs a").removeClass("q-active-tab"),b.addClass("q-active-tab"),"all"==c?a(".q-apps__grid--item").removeClass("q-tab-hidden"):(a(".q-apps__grid--item").addClass("q-tab-hidden"),a("[data-app="+c+"]").removeClass("q-tab-hidden"))})});// get URL hash
var b=window.location.hash;// eslint-disable-next-line no-unused-vars
// enable tabs by hash value
b&&"register"!==b&&(a("html, body").animate({scrollTop:a(".q-agenda-container").top},"slow"),a("[data-tab='"+b+"-tab']").trigger("click"))})(jQuery),function(a){"use strict";a(document).ready(function(){// get hash value
var b="";window.location.hash&&(b=window.location.hash.substring(1),"register"!==b&&(b=0==b.indexOf("/")?b.substring(1):b,a("[href='#"+b+"']").trigger("click")))})}(jQuery),function(){"use strict";// init news and events carousel
new Swiper(".resources-slider-container",{slidesPerView:"auto",navigation:!1,pagination:{el:".resources .swiper-pagination",type:"bullets"},centeredSlides:!1,spaceBetween:30})}();
//# sourceMappingURL=index.js.map