"use strict";/*
 * append the leadsource to the iframe URL
 */(function(){"use strict";var a,b;window.location.search&&(b=window.location.search.match(/leadsource=(\d+)([;&#]|$)/),b&&(a=document.querySelector("iframe[name=salesforce]"),a&&!a.src.match(/\?/)&&(a.src+="?leadsource="+b[1])))})();
//# sourceMappingURL=index.js.map