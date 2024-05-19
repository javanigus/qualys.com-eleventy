"use strict";/* global jQuery */ // session filter dropdown menu
// filter session videos
(function(a){"use strict";// hide all class agendas
// if user clicks on class dropdown menu,
// if user clicks anywhere, close dropdown menu
a(".class").addClass("hidden"),a(".class-select").on("click",function(b){// open the dropdown menu
b.stopPropagation(),a(b.currentTarget).find(".class-select-menu").removeClass("hidden")}),a(".class-select-menu-item").on("click",function(b){a(".class").addClass("hidden");// show selected class agenda
var c=a(b.currentTarget).attr("data-class");// close drop-down menu
a("."+c).removeClass("hidden"),a(".class-select-title").text(a(b.currentTarget).text()),setTimeout(function(){a(".class-select-menu").addClass("hidden")},0)}),a(document).on("click",function(){a(".class-select-menu").addClass("hidden")})})(jQuery),function(a){"use strict";a(document).ready(function(){// if user clicks on video type dropdown menu option,
// if user clicks on video type dropdown menu option,
// if user clicks anywhere, close dropdown menu
a("#session-videos .class-select").on("click",function(b){// open the dropdown menu
b.stopPropagation(),a(b.currentTarget).find("#session-videos .class-select-menu").removeClass("hidden")}),a("#session-videos .class-select-menu-item").on("click",function(b){a(".video-container").addClass("hidden"),a(".video-type-container").addClass("hidden");// show selected type of videos
var c=a(b.currentTarget).attr("data-class");// close drop-down menu
a(".video-container."+c).removeClass("hidden"),a(".video-type-container."+c).removeClass("hidden"),"all"===c&&(a(".video-container").removeClass("hidden"),a(".video-type-container").removeClass("hidden")),setTimeout(function(){a(".class-select-menu").addClass("hidden")},0)}),a(document).on("click",function(){a(".class-select-menu").addClass("hidden")})})}(jQuery);
//# sourceMappingURL=index.js.map