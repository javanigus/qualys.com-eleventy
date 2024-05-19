"use strict";/* global _ Waypoint Swiper anime  */(function(){"use strict";// function to navigate to a section in the page with smooth scroll
function a(a){const b=document.getElementById(a);if(b){const a=b.offsetTop+100;window.scrollTo({top:a,behavior:"smooth"})}}// replay the story
// function to attach to the desktop paging for scrollong between the stories
function b(a){a.forEach(a=>{a.addEventListener("click",function(a){a.preventDefault(),c.call(this,a)})})}// function to smoothly scroll between the stories on desktop paging
function c(){const a=this.getAttribute("data-story"),b=document.getElementById(a);b&&b.scrollIntoView({behavior:"smooth",block:"start"})}// function to remove the active style on desktop paging
function d(){const a=document.querySelectorAll(".js-paging");a.forEach(function(a){a.classList.remove("active")})}/**
	 * hero heading animation
	 */ /**
	 *
	 * Story video and scroll controller funtion for desktop
	 */function e(a,b,c,e){var f=document.querySelector("#videoCount"),g=document.querySelector(".js-videoPlayer");// This function will be called by the Waypoint handlers
return function(){f.innerHTML=e+1,d();// Find and activate the corresponding link
var h=a.id,i=document.querySelector(".js-paging[data-story=\"".concat(h,"\"]"));// e.g., "story_1"
i&&i.classList.add("active"),g.currentTime=b,g.play(),g.muted=!1;// Set up a function to monitor time updates and stop the video at the designated time
var j=function(){Math.floor(g.currentTime)>=c?(g.removeEventListener("timeupdate",j),g.pause()):g.play()};// Add the event listener to handle time updates
g.addEventListener("timeupdate",j)}}function f(){// var stories = document.querySelectorAll(".storyWrapper > .story");
var a=document.querySelectorAll(".storyWrapper"),b=document.querySelector(".js-videoPlayer"),c=document.querySelector(".j-main-container"),d=document.querySelector(".headerDiv"),f=[];if(!b)return!1;b.muted=!0,a.forEach(function(a,b){var c=a.getAttribute("data-start"),d=a.getAttribute("data-stop"),g=c.split(":"),h=parseInt(g[0],10),i=parseInt(g[1],10),j=parseInt(g[2],10),k=d.split(":"),l=parseInt(k[0],10),m=parseInt(k[1],10),n=parseInt(k[2],10),o=e(a,3600*h+60*i+j,3600*l+60*m+n,b),p=new Waypoint({element:a,handler:o,offset:"30%"}),q=new Waypoint({element:a,handler:o,offset:"-70%"});f.push(p,q)});// Waypoint to stop video when headerDiv is 50% on viewport
const g=document.querySelector(".js-back-button");var h=new Waypoint({element:c,handler:function handler(a){"down"===a?g.classList.add("hidden"):g.classList.remove("hidden")},offset:"bottom-in-view"}),i=new Waypoint({element:d,handler:function handler(a){"down"===a?g.classList.remove("hidden"):g.classList.add("hidden")},offset:"-90%"});f.push(h,i)}function g(){var a=window.innerWidth||document.documentElement.clientWidth;768<=a&&f()}/**
	 * mobile video playback
	 */function h(){document.querySelectorAll(".js-mvideo").forEach(a=>{a.pause(),a.currentTime=0})}function i(a){h();// Find the video player within the same `.js-mstory` parent and play it
const b=a.closest(".js-mstory").querySelector(".js-mvideo");b&&(b.play(),b.muted=!1)}function j(){const a=document.querySelectorAll(".js-mvideo-content");var b=document.querySelectorAll(".js-mvideo");// Loop through each video element and mute it
b.forEach(function(a){a.muted=!0}),a.forEach(a=>{// Waypoint for scrolling down
// Waypoint for scrolling up
new Waypoint({element:a,handler:function handler(b){"down"===b&&i(a)},offset:"75%"// Trigger when the element is 75% into the viewport from the top
}),new Waypoint({element:a,handler:function handler(b){"up"===b&&i(a)},offset:"-40%"// Trigger when the element has passed 40% of the viewport from the bottom
})})}function k(){var a=window.innerWidth||document.documentElement.clientWidth;768>a?j():h()}const l=document.querySelector(".js-replay-button");l&&l.addEventListener("click",()=>a("desktop_top"));const m=document.querySelector(".js-replay-button");m&&(anime({targets:".js-dilo-hero-heading",opacity:[0,1],delay:1e3// increase delay by 100ms for each elements.
}),anime({targets:".js-dilo-hero-heading span",translateY:[30,0],delay:anime.stagger(50,{easing:"easeOutSine",start:1e3})// increase delay by 100ms for each elements.
}),anime({targets:".js-dilo-person",translateY:[-30,0],opacity:[0,1],delay:anime.stagger(100,{easing:"easeOutSine",start:1300,direction:"reverse"})}),anime({targets:".js-dilo-hero-btn",opacity:[0,1],translateY:[-60,0],duration:100,delay:1600// increase delay by 100ms for each elements.
}),anime({targets:".js-dilo-quote",translateY:[-30,0],opacity:[0,1],delay:anime.stagger(100,{easing:"easeOutSine",start:1300,direction:"reverse"})})),document.addEventListener("DOMContentLoaded",function(){g(),window.addEventListener("resize",_.debounce(function(){g()},250))}),document.addEventListener("DOMContentLoaded",function(){// Assuming you have a debounce function available, such as through Lodash (_.debounce)
k(),window.addEventListener("resize",_.debounce(function(){k()},250))});/*
	* product tour scripts
	*/ // product tour carousel
let n=null;const o=document.querySelector(".js-daylife-slider"),p=document.querySelector(".js-dilo-slider-nav"),q=()=>{n=new Swiper(".js-daylife-slider",{slidesPerView:3,spaceBetween:20,centeredSlides:!1,autoplay:!1,autoHeight:!1,loop:!1,navigation:{nextEl:".js-next-dayslide",prevEl:".js-prev-dayslide"},pagination:{el:".js-daylife-paging",clickable:!0},breakpoints:{320:{slidesPerView:1},640:{slidesPerView:2},940:{slidesPerView:3}},on:{init:function init(){var a=o.offsetHeight,b=document.querySelectorAll(".js-pt-hover");b.forEach(b=>{b.style.height=a-100+"px"})}}})},r=()=>{!n&&o&&(o.classList.remove("opacity-0"),p.classList.remove("opacity-0"),q())};o&&(window.addEventListener("load",r),window.addEventListener("resize",r));// hover text change
// Select all elements with the class 'js-pt-storyBox'
const s=document.querySelectorAll(".js-pt-storyBox");// Check if there are any '.js-pt-storyBox' elements on the page
// dilo story pagination
0<s.length&&s.forEach(a=>{// Mouseout event
a.addEventListener("mouseover",()=>{const b=a.querySelector(".js-pt-screenshot"),c=a.querySelector(".js-pt-content"),d=a.querySelector(".js-pt-hover");// Add 'hidden' class to 'js-pt-screenshot' and 'js-pt-content'
b&&b.classList.add("opacity-0"),c&&c.classList.add("opacity-0"),d&&d.classList.remove("opacity-0")}),a.addEventListener("mouseout",()=>{const b=a.querySelector(".js-pt-screenshot"),c=a.querySelector(".js-pt-content"),d=a.querySelector(".js-pt-hover");// Remove 'hidden' class from 'js-pt-screenshot' and 'js-pt-content'
b&&b.classList.remove("opacity-0"),c&&c.classList.remove("opacity-0"),d&&d.classList.add("opacity-0")})}),document.addEventListener("DOMContentLoaded",function(){function a(){const a=new URLSearchParams(location.search);if(a.has("story")){const b=a.get("story"),c=document.querySelector(".js-ptour-anchor[data-story=\""+b+"\"]");c&&c.click()}}const c=document.querySelectorAll(".js-paging");0<c.length&&b(c),a(),window.addEventListener("hashchange",a)})})();
//# sourceMappingURL=dilo-story.js.map