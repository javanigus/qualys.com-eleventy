"use strict";(function(){"use strict";/*
	 * utility function to convert time strings, "00:03:18" (h:m:s) to number of seconds
	 */ /*
	 * function to react to clicks on chapter links
	 */function a(a){var c=a.currentTarget.href.split("#").pop();b.pause(),b.currentTime=c.toSeconds(),b.play(),a.preventDefault()}/*
	 * only proceed if the browser supports html 5 video
	 */String.prototype.toSeconds=function(){if(this.match(/\d{1,2}:\d{2}:\d{2}/)){var a=this.split(":"),b=parseInt(a[0],10),c=parseInt(a[1],10),d=parseInt(a[2],10);return 3600*b+60*c+d}return NaN};var b=document.getElementsByTagName("video").item(0);if("currentTime"in b)for(var c,d=document.getElementById("chapters"),e=d.getElementsByTagName("a"),f=0,g=e.length;f<g;f+=1)c=e.item(f),c.addEventListener?c.addEventListener("click",a,!1):c.attachEvent("onclick",a)})();
//# sourceMappingURL=index.js.map