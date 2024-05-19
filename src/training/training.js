"use strict";/* global jQuery:false */ /*
 * training tabs
 */ /*
 * automatically open self-paced overlay based on hash value
 */ /*
 * instructor training dropdown
 */(function(a){"use strict";a(".js-q-training-tab").on("click",function(){//event.preventDefault();
// get active tab target ID
var b=a(this).data("tab");// enable active tab
// show active tab content
a(".js-q-training-tab").removeClass("q-active-tab"),a(this).addClass("q-active-tab"),a(".q-training__tabs-content").addClass("q-tab-hidden"),a(b).removeClass("q-tab-hidden")});// get URL hash
var b=window.location.hash;// enable tabs by hash value
b&&a("[data-tab='"+b+"-tab']").length&&a("[data-tab='"+b+"-tab']").trigger("click"),a(".js-q-training-tab-instructor").on("click",function(){a(".js-q-training-tab").removeClass("q-active-tab"),a("[href='#instructor-led']").addClass("q-active-tab"),a(".q-training__tabs-content").addClass("q-tab-hidden"),a("#instructor-led-tab").removeClass("q-tab-hidden"),a.fancybox.close()})})(jQuery),function(a){"use strict";a(document).ready(function(){// get hash value
var b="";// trigger the click on hash selectors
window.location.hash&&(b=window.location.hash.substring(1),b=0==b.indexOf("/")?b.substring(1):b),a("[href='#course_"+b+"']").trigger("click")})}(jQuery),function(a){"use strict";a(document).ready(function(){var b=!0;a(".js-classes-filter").on("change",function(){var c=a(this).find(":selected").val();setTimeout(function(){"all"===c?!b&&(a(".js-classes-table-container .js-course-row").show(),b=!0):(b=!1,a(".js-classes-table-container .js-course-row").hide(),setTimeout(function(){a(".js-classes-table-container .js-course-row[data-id='"+c+"']").show()},100))},100)}),a(".js-course-row .js-handle").each(function(){var b=a(this),c=b.parents(".js-course-row");b.on("click",function(){c.toggleClass("expand")})})})}(jQuery);
//# sourceMappingURL=training.js.map