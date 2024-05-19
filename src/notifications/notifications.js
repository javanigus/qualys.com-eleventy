"use strict";/* global moment */ /*
 * Convert time to user's local time
 */(function(){"use strict";var a,b,c,d;// set the locale based on the user's browser
for(moment.locale(window.navigator.languages||window.navigator.language),c=document.querySelectorAll("time[datetime]"),d=0;d<c.length;d+=1)b=c.item(d),a=moment.tz(b.getAttribute("datetime"),moment.tz.guess()),b.innerText=a.format("LLLL z")})();
//# sourceMappingURL=notifications.js.map