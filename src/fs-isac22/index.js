"use strict";/* global jQuery Swiper:false MktoForms2 */ /* change Marketo form submit button text */ /* carousel */(function(a,b){"use strict";b.onFormRender(function(){setTimeout(function(){a(".mktoButtonWrap button[type=submit]").text("Submit")},10)})})(jQuery,MktoForms2),function(){"use strict";// PPT presernation slider
var a=new Swiper(".presentation-slider",{autoplay:{delay:3e3,disableOnInteraction:!1,pauseOnMouseEnter:!0},navigation:{nextEl:".ppt-next",prevEl:".ppt-prev",disabledClass:"q-carousel-button--disabled"},pagination:!1,centeredSlides:!1}),b=document.querySelector(".presentation-slider");b.addEventListener("mouseenter",function(){a.autoplay.stop()}),b.addEventListener("mouseleave",function(){a.autoplay.start()})}();
//# sourceMappingURL=index.js.map