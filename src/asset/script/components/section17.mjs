"use strict";/* global jQuery Vimeo */(function(a){"use strict";// video overlay hide on play
a(".section17 .play-icon").on("click",function(){var b=document.querySelector(".section17 .poster"),c=document.querySelector(".section17 .play-icon"),d=document.querySelector(".section17 .q-video-poster-overlay"),e=document.querySelector("iframe"),f=new Vimeo.Player(e);b.classList.add("hidden"),c.classList.add("hidden"),d.classList.add("hidden"),f.play(),a(".section17 .video-overlay").addClass("hidden")})})(jQuery);

//# sourceMappingURL=section17.mjs.map