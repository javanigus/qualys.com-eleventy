"use strict";/* global jQuery TimelineLite */ /* eslint-disable */ /* eslint-enable */ /* eslint-disable */ /* eslint-enable */ // stagger in app badges in hero banner
/*
 * add class to nav link to highlight it
 */webpackJsonp([5,18,19],{/***/23:(/***/function _(a,b,c){"use strict";var d=c(2),e=function(a){return a&&a.__esModule?a:{default:a}}(d);(0,e.default)()}),/***/40:(/***/function _(){// removed by extract-text-webpack-plugin
/***/}),/***/77:(/***/function _(a,b,c){c(23),a.exports=c(40)})},[77]),webpackJsonp([17],{/***/21:(/***/function _(a,b,c){"use strict";var d=c(4),e=function(a){return a&&a.__esModule?a:{default:a}}(d);(0,e.default)()}),/***/75:(/***/function _(a,b,c){a.exports=c(21)})},[75]),function(a){"use strict";a(".q-apps__tabs a").each(function(){var b=a(this),c=b.data("tab");b.on("click",function(){a(".q-apps__tabs a").removeClass("active-tab"),b.addClass("active-tab"),"all"==c?a(".q-apps__grid--item").removeClass("hidden"):(a(".q-apps__grid--item").addClass("hidden"),a("[data-app="+c+"]").removeClass("hidden"))})})}(jQuery),function(a){var b=new TimelineLite,c=Array.prototype.slice.call(document.querySelectorAll(".app-badge")),d=a(window).width();970<d?(c.slice(0,8).forEach(function(a){a.classList.add("row1")}),c.slice(8,16).forEach(function(a){a.classList.add("row2")}),c.slice(16,24).forEach(function(a){a.classList.add("row3")})):855<d?(c.slice(0,7).forEach(function(a){a.classList.add("row1")}),c.slice(7,14).forEach(function(a){a.classList.add("row2")}),c.slice(14,21).forEach(function(a){a.classList.add("row3")})):680<d?(c.slice(0,6).forEach(function(a){a.classList.add("row1")}),c.slice(6,12).forEach(function(a){a.classList.add("row2")}),c.slice(12,18).forEach(function(a){a.classList.add("row3")})):575<d?(c.slice(0,5).forEach(function(a){a.classList.add("row1")}),c.slice(5,10).forEach(function(a){a.classList.add("row2")}),c.slice(10,15).forEach(function(a){a.classList.add("row3")})):575>=d&&(c.slice(0,4).forEach(function(a){a.classList.add("row1")}),c.slice(4,8).forEach(function(a){a.classList.add("row2")}),c.slice(8,12).forEach(function(a){a.classList.add("row3")}));var e=document.querySelector(".q-default-hero");// when the hero content animation is complete, stagger in the app badges
e.addEventListener("heroContentComplete",function(){// Unhide app badges
// stagger in app badges
Array.prototype.forEach.call(c,function(a){a.classList.remove("hidden")}),b.staggerFromTo(".app-badge.row1",// stagger first row of app badges
.6,// duration
{y:"20%",autoAlpha:0},{y:"0%",autoAlpha:1,ease:window.Power4.easeInOut,onComplete:function onComplete(){}},.1,// stagger duration between elements
0// start immediately
).staggerFromTo(".app-badge.row2",// stagger second row of app badges
.6,// duration
{y:"20%",autoAlpha:0},{y:"0%",autoAlpha:1,ease:window.Power4.easeInOut,onComplete:function onComplete(){}},.1,// stagger duration between elements
.45// start after 0.45 seconds
).staggerFromTo(".app-badge.row3",// stagger third row of app badges
.6,// duration
{y:"20%",autoAlpha:0},{y:"0%",autoAlpha:1,ease:window.Power4.easeInOut,onComplete:function onComplete(){}},.1,// stagger duration between elements
.79// start after 0.79 seconds
)})}(jQuery),function(){var a=document.querySelector(".q-navigation__link.cloud-apps");a.classList.add("active")}();
//# sourceMappingURL=index.js.map