"use strict";/* global moment */ /*
 * change all time tags (with datetime attributes) to the visitors local time
 */(function(a){"use strict";// helper function
// wait for the document to be ready
(function(a){"loading"===document.readyState?document.addEventListener("DOMContentLoaded",a):a()})(function(){if(a)// if moment is not loaded, then don't bother
{// find all time tags with datetime attributes
// and data-format attributes
const b=document.querySelectorAll("time[datetime][data-format]");if(b)for(let c=0,d=b.length;c<d;c+=1){// process each element found
const d=b[c],e=d.getAttribute("datetime"),f=d.getAttribute("data-format");let g=d.getAttribute("locale");if(g||(navigator.languages&&0<navigator.languages.length?g=navigator.languages[0]:g="en"),e&&f){// replace contents with local time formatted by moment.js
const b=a(e);b.locale(g),d.innerText=b.format(f);// add lang attribute
// since moment will use the language matching the locale
const c=g.substr(0,2);d.setAttribute("lang",c)}}}})})(moment);
//# sourceMappingURL=local-time-with-moment.js.map