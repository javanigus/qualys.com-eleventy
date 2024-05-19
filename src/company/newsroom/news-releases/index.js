"use strict";// Make the active year bold
// Hide and show older years
(function(){"use strict";for(var a=document.querySelectorAll(".list-of-years a"),b=0;b<a.length;++b)window.location.pathname===a[b].pathname&&a[b].classList.add("link--active")})(),function(){"use strict";// hide old years
// Loop using "for" instead of "forEach" because it's faster (https://jsperf.com/fast-array-foreach)
for(var a=Array.prototype.slice.call(document.querySelectorAll(".list-of-years li")),b=4;b<a.length;++b)a[b].classList.add("old-year");// add "All" link
var c=document.querySelector(".list-of-years li:nth-child(4)");if(null!==c){var d=document.querySelector("li.all");d.classList.remove("hidden"),d=d.parentNode.removeChild(d),c.insertAdjacentHTML("afterend",d.outerHTML);var e=document.querySelector("li.all a");// when "All" link is clicked ...
e.addEventListener("click",function(b){b.preventDefault(),b.target.parentNode.removeChild(b.target);// unhide the older years
for(var c=3;c<a.length;++c)a[c].classList.remove("old-year")})}}();
//# sourceMappingURL=index.js.map