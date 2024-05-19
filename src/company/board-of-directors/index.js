"use strict";/**
 * expand / collapse long passages of text
 */(function(){"use strict";// expand/collapse the clicked element
// when click "Expand+" link, expand the text
// when click "Collapse+" link, collapse the text
function a(a){const b=a.currentTarget,c=b.parentNode,d=c.classList.contains("expandedHeight");d?(c.classList.add("collapsedHeight"),c.classList.remove("expandedHeight"),setTimeout(()=>b.innerText="Expand +",200)):(c.classList.remove("collapsedHeight"),c.classList.add("expandedHeight"),setTimeout(()=>b.innerText="Collapse \u2013",200))}const b=Array.from(document.querySelectorAll(".expandable"));b.forEach(function(b){var c=b.getAttribute("data-height");if(b.offsetHeight>c){// create Expand+, Collapse- button
let c=document.createElement("button");// collapse text
c.innerText="Expand +",c.addEventListener("click",a),b.appendChild(c),b.classList.add("collapsedHeight")}})})();
//# sourceMappingURL=index.js.map