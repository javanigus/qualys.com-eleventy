"use strict";/* global jQuery Swiper */(function(a){"use strict";function b(a){return new Swiper(a,{loop:!0,autoplay:{delay:3e3,disableOnInteraction:!1},observer:!0,observeParents:!0})}function c(c){var d=c.parents(".js-accordion-items"),e=d.next(".q-accordion-images"),f=c.data("image");// Close all accordions and hide their images
// Open the clicked accordion
d.hasClass("accordion-init")&&d.removeClass("accordion-init"),c.parents(".q-accordion-items").find(".q-accordion-item").removeClass("active"),c.parents(".q-accordion-items").find(".js-txt-content").slideUp(350),e.find(".js-img-screenshot").hide(0,function(){a("."+f).show(0,function(){var c=a("."+f+" > .swiper-imgs");const d=b(c[0]);d.update()})}),c.parents(".q-accordion-item").addClass("active"),c.next().slideDown(350)}var d=a(".js-txt-header");// Initialize Swiper for the first slide
d.length&&!d.parents(".q-accordion-item").hasClass("active")&&d.click(function(){c(a(this))}),b(a(".swiper-imgs")[0])})(jQuery);
//# sourceMappingURL=section36.js.map