"use strict";/*
 * show and hide thin strip promo banner
 */(function(){"use strict";// when user clicks the X, close the promo banner and hide it for one day
function a(){// get all promo banners
var a=[].slice.call(document.querySelectorAll(".js-promo-banner"));a&&a.forEach(function(b,c){// hide each banner
a[c].classList.add("promo--hidden")});// set a cookie to expire in 1 day (24 hours)
var b=new Date(new Date().getTime()+86400000);document.cookie=["qualys.promo.banner.notice=false","path=/","expires="+b.toUTCString(),"secure=yes"].join("; ")}// if the promo banner cookie doesn't exist, show one promo banner at a time
if(!document.cookie.match(/qualys\.promo\.banner\.notice/)){// get array of promo banners
var b=[].slice.call(document.querySelectorAll(".js-promo-banner")),c=Math.round((Date.now()||new Date().getTime())/1e3);// get client's current time in seconds
// filter out expired promos
b=b.filter(function(a){var b=a.getAttribute("data-expires");if(b){var c=new Date(b);if(c&&c>new Date)return a}});// randomly get index of one promo banner to show
var d=c%b.length,e=!1,f=["whitepapers","forms","free-trial","lp"],g=window.location.pathname;// do not show banner for pages under certain folders
for(folderIndex in f)if(0<=g.indexOf(f[folderIndex])){e=!0;break}// show one promo banner
if(0<=d&&!e){b[d].classList.remove("promo--hidden");var h=document.querySelector("body");h.insertBefore(b[d],h.firstChild)}}// when user clicks to close the promo banner close button, call the closeBanner function
var i=[].slice.call(document.querySelectorAll(".q-alert__close"));i&&i.forEach(function(b){b.addEventListener("click",a)})})();
//# sourceMappingURL=ssllabs-banner.js.map