"use strict";/* global  Vimeo */ /*
 * Play video when user clicks poster image
 */(function(){"use strict";function a(){if(location.hash){const a=location.hash.substring(1),b=document.querySelector("#".concat(a));b&&b.scrollIntoView({behavior:"smooth",block:"start"})}}// call function every time the hash changes
//document.addEventListener("hashchange", scrollHashAnchorIntoView);
// if you really want to wait until two seconds after the page loads, then use this code instead of the line above
window.addEventListener("load",function(){setTimeout(a,2e3)})})(),function(){"use strict";function a(){var a=document.querySelector("iframe"),d=new Vimeo.Player(a);b.classList.add("hidden"),c.classList.add("hidden"),d.play()}var b=document.querySelector(".poster"),c=document.querySelector(".play-icon");b.addEventListener("click",a),c.addEventListener("click",a)}();
//# sourceMappingURL=index.js.map