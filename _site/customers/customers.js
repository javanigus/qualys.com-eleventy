"use strict";/* global jQuery:false Swiper:false */ /* eslint-disable */ /* eslint-enable */webpackJsonp([1],{/***/13:(/***/function _(a,b,c){"use strict";function d(a){return a&&a.__esModule?a:{default:a}}// default hero transition
var e=c(2),f=d(e),g=c(59),h=d(g),i=c(5),j=d(i);// target dropdowns and what particular data it should filter
(0,f.default)("q-customers-hero"),(0,h.default)("q-customers-story-filter--stories"),(0,h.default)("q-customers-story-filter--size"),(0,h.default)("q-customers-story-filter--industry"),(0,h.default)("q-customers-story-filter--solution")}),/***/33:(/***/function _(){// removed by extract-text-webpack-plugin
/***/}),/***/59:(/***/function _(a,b){"use strict";/*

// Customers / Story filter

	Basic filter logic for the customers stories. It filters:
 - stories section (data-story)
 - solution item (data-solution)
 - industry item (data-industry)
 - size of item (data-size)

 It can filter multiple items with logical AND operation.

 Each item to be filtered, targeted by 'q-filter-item' has multiple data attributes for the filtering, i.e.
	<div .. data-size="size-smb" data-industry="industry-education" data-solution="solution-saq">

Each story section has data-story, i.e.
	<div class="q-customers-testimonials" data-story="testimonials" id="testimonials">

 These filter values (i.e. size-smb) are the same as on current production, but if needed to be changed they can
 be updated in /partials/customers/story-filter.hbs
 Note: If filter option values are updated, make sure they also match the values for the data they need to filter
*/Object.defineProperty(b,"__esModule",{value:!0}),b.default=function(a){function b(){// function to check if the array has visible items in it
function a(a){// function that returns true if element is visible, otherwise false
function b(a){return!!(a.offsetWidth||a.offsetHeight||a.getClientRects().length)}for(var c=!1,d=0;d<a.length;d++)if(b(a[d])){c=!0;break}return c}// if best practices section has no visible items
// reset / unhide all sections
var b=document.querySelectorAll(".no-results-found")[0];b.classList.add("hidden");var c=document.querySelectorAll(".q-customers-practices")[0],d=document.querySelectorAll(".q-customers-success")[0],e=document.querySelectorAll(".q-customers-testimonials")[0];c.classList.remove("hidden"),d.classList.remove("hidden"),e.classList.remove("hidden");// get items
var f=document.querySelectorAll(".q-customers-practice-item"),g=document.querySelectorAll(".q-customers-case-studies__item"),h=document.querySelectorAll(".q-customers-quotes__item");// convert collection to an array
f=Array.prototype.slice.call(f,0),g=Array.prototype.slice.call(g,0),h=Array.prototype.slice.call(h,0),a(f)||c.classList.add("hidden"),a(g)||d.classList.add("hidden"),a(h)||e.classList.add("hidden"),c.classList.contains("hidden")&&d.classList.contains("hidden")&&e.classList.contains("hidden")&&b.classList.remove("hidden")}// Close the dropdown menu if the user clicks outside of it
var c=document.querySelectorAll("."+a),d=Array.prototype.slice.call(c,0),f=function(){for(var a,b=document.getElementsByClassName("q-customers-story-filter__dropdown-menu"),c=0;c<b.length;c++)a=b[c],a.classList.contains("q-customers-story-filter__dropdown-menu--hidden")||a.classList.add("q-customers-story-filter__dropdown-menu--hidden")},g=function(){// set active filters
for(var a="",b="",c="",d="",e=document.querySelectorAll(".q-customers-story-filter__dropdown-item--selected"),f=document.querySelectorAll(".q-filter-item"),g=0;g<e.length;g++)"story"===e[g].dataset.type&&(a=e[g].dataset.value),"size"===e[g].dataset.type&&(b=e[g].dataset.value),"industry"===e[g].dataset.type&&(c=e[g].dataset.value),"solution"===e[g].dataset.type&&(d=e[g].dataset.value);// filtering for size, solution and industry
f.forEach(function(a){var e=!0;// filter size
"all"!==b&&(e=e&&-1<a.dataset.size.indexOf(b)),"all"!==d&&(e=e&&-1<a.dataset.solution.indexOf(d)),"all"!==c&&(e=e&&-1<a.dataset.industry.indexOf(c)),e?a.removeAttribute("style"):a.style.display="none"});// filtering for stories 'sections'
for(var h=document.querySelectorAll("[data-story]"),j=0;j<h.length;j++)"all"===a?h[j].removeAttribute("style"):h[j].dataset.story===a?h[j].removeAttribute("style"):h[j].style.display="none"};// update filters
d.forEach(function(a){var d=a.querySelector(".q-customers-story-filter__dropdown-menu"),e=a.querySelectorAll(".q-customers-story-filter__dropdown-select"),h=a.querySelectorAll(".q-customers-story-filter__dropdown-item");// on click
c[0].addEventListener("click",function(a){a.preventDefault();var c=a.target;if(f(),d.classList.remove("q-customers-story-filter__dropdown-menu--hidden"),d.contains(c)){// remove selected item from current dropdown and set text
for(var j=0;j<h.length;j++)h[j].classList.remove("q-customers-story-filter__dropdown-item--selected");c.classList.add("q-customers-story-filter__dropdown-item--selected"),e[0].children[0].textContent=c.textContent;for(var k=document.querySelectorAll(".q-heading-plus-cta-button"),l=0;l<k.length;l++)"all"===k[l].dataset.show&&k[l].click();// run filter update
g(),b()}})}),window.addEventListener("click",function(a){a.target.matches(".q-customers-story-filter__dropdown-title")||f()})}}),/***/60:(/***/function _(a,b){"use strict";/***/Object.defineProperty(b,"__esModule",{value:!0})}),/***/67:(/***/function _(a,b,c){c(13),a.exports=c(33)})},[67]),function(a){"use strict";// init customers carousel
/**
	 * open best practices, success stories, and testimonials sections based on hash value in the url
	 */function b(){var b="";window.location.hash&&(b=window.location.hash.substring(1),b=0==b.indexOf("/")?b.substring(1):b,"best-practices"===b?a(".q-customers-practices__cta-button").trigger("click"):"success-stories"===b?a(".q-customers-success__cta-button").trigger("click"):"testimonials"===b&&a(".q-customers-testimonials__cta-button").trigger("click"))}//execute the function on document load
/*
	 * toggle show all / less
	 */ /*
	 * auto select the business size menu based on url #hash value
	 */ //execute the function after the hash value changes in the url
new Swiper(".swiper-container",{slidesPerView:"auto",autoHeight:!1,centeredSlides:!1,navigation:{nextEl:".q-carousel-button--next",prevEl:".q-carousel-button--prev",disabledClass:"q-carousel-button--disabled"},spaceBetween:30}),a(".q-heading-plus-cta-button").on("click",function(b){b.preventDefault();var c=a(b.currentTarget).attr("data-show"),d=a(b.currentTarget).attr("class"),e="";// determine type of story
-1===d.indexOf("q-customers-practices")?-1===d.indexOf("q-customers-success")?-1!==d.indexOf("q-customers-testimonials")&&(e="q-customers-testimonials"):e="q-customers-success":e="q-customers-practices","all"===c?(a("."+e+" .q-filter-item--hidden").removeClass("q-filter-item--hidden"),a(b.currentTarget).text("Show less").attr("data-show","less")):(a("."+e+" .q-filter-item:not(.q-filter-item--featured)").addClass("q-filter-item--hidden"),a(b.currentTarget).text("Show all").attr("data-show","all"))}),a(document).ready(function(){var a;window.location.hash?(a=window.location.hash.substring(1),a=0==a.indexOf("/")?a.substring(1):a):a="","smb"==a?document.getElementsByClassName("js-q-customers__size--smb")[0].click():"sme"==a&&document.getElementsByClassName("js-q-customers__size--sme")[0].click()}),a(document).ready(function(){b()}),a(window).on("hashchange",function(){b()})}(jQuery);
//# sourceMappingURL=customers.js.map