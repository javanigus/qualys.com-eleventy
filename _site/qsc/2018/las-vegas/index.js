"use strict";/* global jQuery */ // agenda tab functionality
// session filter functionality
// training agenda dropdown menu
// expand / collapse session videos
(function(a){"use strict";// if hash value containing tab ID exists, trigger a click on the tab
function b(){var b=window.location.hash.replace(/#|\//gi,"");a("[data-tab-id=\""+b+"\"]").trigger("click"),"nov14"===b||"nov15"===b?setTimeout(function(){a("a[href='#agenda']").trigger("click")},1):("nov12"===b||"nov13"===b||"training"===b)&&setTimeout(function(){a("a[href='#training']").trigger("click")},1)}// Training CTA
a(".tablink").on("click",function(b){b.preventDefault();var c=a(b.currentTarget).attr("data-tab-id");a(".tablink").parent().removeClass("active-date"),a(b.currentTarget).parent().addClass("active-date"),a(".tab-content").addClass("hidden"),a("#"+c).removeClass("hidden"),a(".q-qsc__tabs-item").removeClass("tab-active"),a(b.currentTarget).parents(".q-qsc__tabs-item").addClass("tab-active")}),a(".q-qsc__tabs").on("click",function(b){a(b.currentTarget).toggleClass("open")}),a(".nov14-link, .nov15-link").on("click",b),window.addEventListener("hashchange",b),document.addEventListener("DOMContentLoaded",b),b(),a(".js-taining-cta").on("click",function(b){b.preventDefault(),a(".js-training-tab").trigger("click"),a("html, body").stop().animate({scrollTop:a("#agenda").offset().top},1e3)})})(jQuery),function(a){"use strict";a(".filter-link").on("click",function(b){a(b.currentTarget).hasClass("active")?a(b.currentTarget).removeClass("active"):a(b.currentTarget).addClass("active");var c=[];// create array of active filters
// hide all sessions
// show filtered sessions
a(".filter-link.active").each(function(b,d){c.push(a(d).attr("data-filter-id"))}),a(".tab-content-wrapper tr").addClass("hidden"),a(".tab-content-wrapper tr").each(function(b,d){var e=a(d).attr("data-filter-id");-1!==a.inArray(e,c)&&a(d).removeClass("hidden")})}),a(".clear-all a").on("click",function(){a(".filter-link").each(function(b,c){a(c).removeClass("active"),a(".tab-content-wrapper tr").removeClass("hidden")})})}(jQuery),function(a){"use strict";// hide all class agendas
// if user clicks on class dropdown menu,
// if user clicks anywhere, close dropdown menu
a(".class").addClass("hidden"),a(".class-select").on("click",function(b){// open the dropdown menu
b.stopPropagation(),a(b.currentTarget).find(".class-select-menu").removeClass("hidden")}),a(".class-select-menu-item").on("click",function(b){a(".class").addClass("hidden");// show selected class agenda
var c=a(b.currentTarget).attr("data-class");// close drop-down menu
a("."+c).removeClass("hidden"),setTimeout(function(){a(".class-select-menu").addClass("hidden")},0)}),a(document).on("click",function(){a(".class-select-menu").addClass("hidden")})}(jQuery),function(a){"use strict";a(document).ready(function(){// if user clicks on video type dropdown menu option,
// if user clicks on video type dropdown menu option,
// if user clicks anywhere, close dropdown menu
a("#session-videos .class-select").on("click",function(b){// open the dropdown menu
b.stopPropagation(),a(b.currentTarget).find("#session-videos .class-select-menu").removeClass("hidden")}),a("#session-videos .class-select-menu-item").on("click",function(b){a(".video-type-container").addClass("hidden");// show selected type of videos
var c=a(b.currentTarget).attr("data-class");// close drop-down menu
a(".video-type-container."+c).removeClass("hidden"),"all"===c&&a(".video-type-container").removeClass("hidden"),setTimeout(function(){a(".class-select-menu").addClass("hidden")},0)}),a(document).on("click",function(){a(".class-select-menu").addClass("hidden")})})}(jQuery);
//# sourceMappingURL=index.js.map