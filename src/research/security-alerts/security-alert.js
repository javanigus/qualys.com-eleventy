"use strict";(function(){"use strict";/**
	 * redirect old URL hashes to new URLs
	 */function a(){// handle hashes for vendors
if(location.hash){let a;a=location.hash.match(/^#bulletins-(\w+)/),a&&(location.href=location.href.replace(location.hash,a[1]+"/"))}}/**
	 * handleClick - toggle bulletins open/closed
	 * @this {Element} the target of the event
	 * @returns {undefined}
	 */function b(a){a.target.parentElement.classList.toggle("closed")}/**
	 * handleReady - close bulletins and bind click handler
	 * @returns {undefined}
	 */document.addEventListener("DOMContentLoaded",a),window.addEventListener("hashchange",a),document.addEventListener("DOMContentLoaded",function(){var a,c,d;// close open bulletins
for(a=document.querySelectorAll(".js-bulletin"),d=0;d<a.length;d+=1)a.item(d).classList.add("closed");// set bulletin expander controls
for(c=document.querySelectorAll(".js-bulletin-control"),d=0;d<c.length;d+=1)c.item(d).addEventListener("click",b)})})();
//# sourceMappingURL=security-alert.js.map