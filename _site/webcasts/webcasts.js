/* global TimelineLite:false moment:false */"use strict";/*
 * Convert time to user's local time
 */ /*
 * Animate hero and main content
 */(function(){var a,b,c,d;// set the locale based on the user's browser
for(moment.locale(window.navigator.languages||window.navigator.language),c=document.querySelectorAll("time[datetime]"),d=0;d<c.length;d+=1)b=c.item(d),a=moment.tz(b.getAttribute("datetime"),moment.tz.guess()),b.innerText=a.format("LLLL z")})(),function(){var a=new TimelineLite,b=document.querySelector(".q-default-hero__content").childNodes,c=document.querySelector(".description").childNodes,d=document.querySelector(".learn").childNodes,e=document.querySelector("hr");a.from(e,.8,{top:-163,autoAlpha:0}).staggerFromTo(b,1,{y:"20%",autoAlpha:0},{y:"0%",autoAlpha:1,ease:window.Power4.easeInOut},.1,0).staggerFromTo(c,1,{y:"20%",autoAlpha:0},{y:"0%",autoAlpha:1,ease:window.Power4.easeInOut},.1,.5).staggerFromTo(d,1,{y:"20%",autoAlpha:0},{y:"0%",autoAlpha:1,ease:window.Power4.easeInOut},.1,1)}();
//# sourceMappingURL=webcasts.js.map