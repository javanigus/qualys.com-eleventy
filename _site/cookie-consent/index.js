"use strict";/* global moment */ /*
 * cookie consent section
 */(function(){"use strict";// set the locale based on the user's browser
function a(a){// set a cookie to expire in 1 year
const b=new Date,c=moment().add(1,"year");// set hostname for all sub-domains of qualys.com
let d=window.location.hostname;d.match(/qualys\.com$/)&&(d=".qualys.com");const e=["dnt="+(0!==a&&"0"!==a&&a?"1":"0"),"domain=".concat(d),"path=/","expires="+c.toDate().toUTCString(),"https:"===window.location.protocol?"secure=yes":null].join("; ");document.cookie=e,window.localStorage&&localStorage.setItem("dntConsent",JSON.stringify({date:b.toISOString(),dnt:0!==a&&"0"!==a&&a?"1":"0",ip:sessionStorage.getItem("ipify.ip")})),setTimeout(function(){window.location.reload()},600)}function b(){this.disabled="disabled",f.disabled="disabled",f.removeAttribute("checked"),this.nextElementSibling&&(this.nextElementSibling.innerHTML="Saving \u2026"),a(!1)}function c(){this.disabled="disabled",e.disabled="disabled",e.removeAttribute("checked"),this.nextElementSibling&&(this.nextElementSibling.innerHTML="Saving \u2026"),a(!0)}// helper function to update time elements
function d(a){const b=document.querySelectorAll("time");for(let c=0,d=b.length;c<d;c+=1){const d=b[c];if(a){// date and time are known
const b=moment(a).tz(moment.tz.guess());d.setAttribute("datetime",b.format()),d.innerHTML=b.format("LLLL z")}else// unusal case where date and time are unknown
d.removeAttribute("datetime"),d.innerHTML="some unknown date"}}// bind callbacks to buttons
moment.locale(window.navigator.languages||window.navigator.language);const e=document.querySelector("#yes_i_accept_cookies");e&&e.addEventListener("click",b);const f=document.querySelector("#no_thanks");// update start and end dates for consent
// based on cookie expiration date in local storage
if(f&&f.addEventListener("click",c),document.cookie.match(/\bdnt=[01]\b/)){// check new "dntConsent" item
// and check old "dntExpires" item
const a=localStorage.getItem("dntConsent"),b=localStorage.getItem("dntExpires");if(a){// prefer new "dntConsent" item
const b=JSON.parse(a);if(b.date){const a=moment.parseZone(b.date);d(a)}// report documented IP address
if(b.ip){const a=document.querySelectorAll(".cookie-consent-ip-address");if(a)for(let c=0,d=a.length;c<d;c+=1)a[c].innerHTML=b.ip;const c=document.querySelectorAll(".cookie-consent-ip-address-text");if(c)for(let a=0,b=c.length;a<b;a+=1)c[a].classList.remove("hidden")}}else if(b){// fallback back to old "dntExpires" item
const a=moment.parseZone(b).subtract(1,"year");d(a)}else/* eslint-disable no-console */console.warn("DNT cookie found without related data in local storage."),d()}// show the relavent section based on cookie
if(document.cookie.match(/\bdnt=0\b/)){// show the consent given section
const a=document.querySelector(".cookie-consent-yes");a&&a.classList.remove("hidden"),e.setAttribute("checked","checked")}else if(document.cookie.match(/\bdnt=1\b/)){// show the consent not given section
const a=document.querySelector(".cookie-consent-no");a&&a.classList.remove("hidden"),f.setAttribute("checked","checked")}else{// show the Unknown Consent section
const a=document.querySelector(".cookie-consent-unknown");a&&a.classList.remove("hidden")}// find and store the "checking consent" element
const g=document.querySelector(".cookie-consent-checking");g&&g.classList.add("hidden")})();
//# sourceMappingURL=index.js.map