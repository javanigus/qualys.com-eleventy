"use strict";/**
 * COPYRIGHT 2014 Jobvite, Inc. All rights reserved. This copyright notice is Copyright Management
 * Information under 17 USC 1202 and is included to protect this work and deter copyright infringement.
 * Removal or alteration of this Copyright Management Information without the express written permission
 * of Jobvite, Inc. is prohibited, and any such unauthorized removal or alteration will be a violation of
 * federal law.
 *
 * Usage:
 *
 * Place this element where you want the iframe to be rendered:
 * <div class="jv-careersite" data-careersite="your-careersite-name"></div>
 *
 * Place this script before the closing body tag:
 * <script src="https://jobs.jobvite.com/__assets__/scripts/careersite/public/iframe.js?v=01515558317" integrity="sha384-NJUFKgyduqSua2X38VH634MrbXYaaQsodqFzzUnaDslWu0BjR+/rJ0As415VMaYX" crossorigin="anonymous"></script>
 *
 * Optional Attributes:
 *
 * - data-category: filter job list by category name
 * - data-department: filter job list by department name
 * - data-location: filter job list by location name
 * - data-region: filter job list by region name
 * - data-subsidiary: filter job list by subsidiary name
 * - data-type: filter job list by type name
 * - data-page: internal page to load, e.g. job/<jobId>/apply
 * - data-force-redirect: always redirect to mobile site when mobile browser is detected
 * - data-no-redirect: if on data-page, don't redirect to mobile site when mobile browser is detected
 *
 * Mobile Support:
 *
 * If a supported mobile browser is detected, the iframe will be replaced with a
 * link to your mobile site. To provide your own link, place it inside the div.
 * For example:
 *
 * <div class="jv-careersite" data-careersite="your-careersite-name">
 *     <a href="http://jobs.jobvite.com/your-careersite-name">View our open jobs.</a>
 * </div>
 *
 */(function(a){// functions -------------------------------------------------------------------
function b(){var a=document.createElement("a");a.innerHTML="View Open Positions",a.href=h,g.appendChild(a)}function c(a,b){var c,d,e,f,h,k=a?a.substr(1).split("&"):[],l="",m=k.length,n=["nl=1"],o=b||"";for(h=0;h<m;h++)d=k[h].split("="),"p"===d[0]?(c=decodeURIComponent(d[1]).split("?"),o=c[0],c[1]&&n.push(c[1])):n.push(k[h]);for(e in j)j.hasOwnProperty(e)&&(f=g.getAttribute(e),f&&n.push(j[e]+"="+f));return decodeURI(o).match(/\.[\s\n\r]*\./)&&(o=""),o+(n.length?"?"+n.join("&"):"")}function d(){var a=null!==g.getAttribute("data-force-redirect"),b=null!==g.getAttribute("data-no-redirect"),c=g.getAttribute("data-page");return!!a||!(b&&c&&0===k.indexOf(c))&&"?"!==k.charAt(0)}function e(a,b,c){return a.addEventListener?(a.addEventListener(b,c,!1),!0):a.attachEvent?a.attachEvent("on"+b,c):void 0}function f(a,b,c){var d=new RegExp("([?&])"+b+"=.*?(&|$)","i"),e=-1===a.indexOf("?")?"?":"&";return a.match(d)?a.replace(d,"$1"+b+"="+c+"$2"):a+e+b+"="+c}var g,h,i,j,k;return j={"data-category":"c","data-department":"d","data-location":"l","data-region":"r","data-subsidiary":"s","data-type":"t"},g=document.querySelector(".jv-careersite"),g?g.getAttribute("data-careersite")?void(a.Jobvite=a.Jobvite||{},i=a.Jobvite.baseUrl||"//jobs.jobvite.com",k=c(a.location.search,g.getAttribute("data-page")),h=[i,g.getAttribute("data-careersite"),k].join("/"),function b(a){return!!a.match(/^(?=.*Android)(?=.*Mobile).*/)||!!a.match(/.*iphone.*/i)}(a.navigator.userAgent)?d()?a.location.href=h:!g.firstChild&&b():function b(){var c,d;for(c=document.createElement("iframe"),c.frameBorder=0,c.style.width="100%",c.src=h,c.className="jv-careersite-iframe",c.name="jobvite_careersite_iframe";g.firstChild;)g.removeChild(g.firstChild);g.appendChild(c),d={action_resize:function action_resize(a){c.style.height=a.height+25+"px"},action_navigate:function action_navigate(b){b.href.match(/^(https?:)?\/\//)?a.location=b.href:a.location.search=f(a.location.search,"p",encodeURIComponent(b.href))},action_scrollToFrame:function action_scrollToFrame(){c.scrollIntoView()}},e(a,"message",function(a){var b;if(a.source===c.contentWindow){try{b=JSON.parse(a.data)}catch(a){b={}}d["action_"+b.name]&&d["action_"+b.name](b.data)}},!1)}()):void function b(a){"undefined"!=typeof console&&null!==console&&"function"==typeof console.warn&&console.warn(a)}("Jobvite: no careersite detected!"):void 0})(window);
//# sourceMappingURL=jobvite-iframe.js.map