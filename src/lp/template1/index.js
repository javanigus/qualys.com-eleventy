"use strict";/* global jQuery TimelineLite Waypoint */ /*
 * Slide form down on mobile when button is clicked
 */ /*
 * animate heading and computers
 */(function(a){"use strict";function b(){var a=new TimelineLite;a.addLabel("start"),a.fromTo(d,1,{y:"-100%",opacity:0},{y:"0%",opacity:1,ease:e},"start+=0")}function c(){a(".form__wrapper").removeClass("overlay");var b=new TimelineLite;b.addLabel("start"),b.fromTo(d,1,{y:"0%",opacity:1},{y:"-100%",opacity:0,ease:e},"start+=0")}var d=document.querySelector(".form__wrapper")||null,e=window.Power4.easeInOut;null!==d&&(a(".heroContainer .q-button, .try-it .q-button").on("click",function(){a(".form__wrapper").addClass("overlay"),b()}),a(".close-overlay").on("click",function(){c()}))})(jQuery),function(){"use strict";var a=!1;new Waypoint({element:document.getElementById("features"),offset:"80%",handler:function handler(b){var c=new TimelineLite;"down"!==b||a||c.fromTo(".feature-container .heading--2",1,{y:"-10%",autoAlpha:0},{y:"0%",autoAlpha:1,ease:window.Power4.easeInOut}),a=!0}});var b=!1;new Waypoint({element:document.getElementById("computers"),offset:"80%",handler:function handler(a){var c=new TimelineLite;"down"!==a||b||c.fromTo(".screenshot.desktop",1.5,{x:"25%",autoAlpha:0},{x:"0%",autoAlpha:1,ease:window.Power4.easeInOut}),b=!0}});var c=!1;new Waypoint({element:document.getElementById("laptop-mobile"),offset:"70%",handler:function handler(a){var b=new TimelineLite;"down"!==a||c||b.fromTo(".screenshot.mobile",1.5,{x:"25%",autoAlpha:0},{x:"0%",autoAlpha:1,ease:window.Power4.easeInOut}),c=!0}})}();
//# sourceMappingURL=index.js.map