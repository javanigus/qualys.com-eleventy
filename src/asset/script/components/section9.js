"use strict";/* global jQuery  */ /*
 * Swiper for customer quotes in hero
 */(function(a){"use strict";// video overlay hide on play
// video playlist
a(".section9 .play-icon, .section9 .video-link").on("click",function(){a(".section9 .video-overlay").addClass("hidden")}),a(".section9 .video-link").on("click",function(){var b=a(this),c=b.text();a(".section9 .active-video").text(c).removeClass("menu-active"),a(".section9 .video-links-list").fadeOut("fast")}),a(".section9 .active-video").on("click",function(){a(".section9 .video-links-list").fadeToggle("fast"),a(this).toggleClass("menu-active")}),a(document).mouseup(function(b){var c=a(".section9 .video-playlist");c.is(b.target)||0!==c.has(b.target).length||(a(".section9 .video-links-list").hide(),a(".section9 .active-video").removeClass("menu-active"))})})(jQuery);
//# sourceMappingURL=section9.js.map