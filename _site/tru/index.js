"use strict";webpackJsonp([13],{/***/13:(/***/function _(a,b,c){"use strict";function d(a){return a&&a.__esModule?a:{default:a}}// set up other transition elements
function e(){var a=document.querySelector(".js-hero-graphics");setTimeout(function(){a.classList.add("animation")},600)}var f=c(0),g=d(f),h=c(1),i=d(h),j=document.querySelector(".q-research-unit"),k=new g.default,l=document.querySelector(".js-tru-hero"),m=window.Power4.easeInOut;// hero animations
const n=new IntersectionObserver(a=>{a.forEach(a=>{a.isIntersecting&&(k.addLabel("start"),k.fromTo(".js-hero-sphare",1,{autoAlpha:0},{autoAlpha:1,ease:m}),k.fromTo(".js-reserve-link",1,{y:"-20px",autoAlpha:0},{y:"0",autoAlpha:1,ease:m},"start-=0.1"),k.staggerFromTo(".js-hero-heading span",.5,{y:"-40px",autoAlpha:0},{y:"0",autoAlpha:1,onComplete:e},.15,"start-=0.1"),0<a.intersectionRatio&&n.unobserve(a.target))})},{threshold:"0.25"});// transition in numbers
n.observe(l),new i.default({//eslint-disable-line
element:j,offset:"100%",handler:function(a){"down"===a&&k.fromTo(".q-research-unit-inner__heading",1,{y:"-20%",autoAlpha:0},{y:"0%",autoAlpha:1,ease:window.Power4.easeInOut},.3).staggerFromTo(".q-numbers__item",.8,{y:"20%",autoAlpha:0},{y:"0%",autoAlpha:1,ease:window.Power4.easeInOut},.2,"-=0.75")}})})},[13]),function(a){"use strict";a(document).ready(function(){// get all webcasts times
a(".webcast").each(function(b,c){var d=a(c).find("time").attr("datetime");// if webcast is in the future ...
0>moment().diff(moment(d))&&a(c).find(".label__upcoming").removeClass("hidden")})})}(jQuery),function(){"use strict";var a,b,c,d;// set the locale based on the user's browser
for(moment.locale(window.navigator.languages||window.navigator.language),c=document.querySelectorAll("time[datetime]"),d=0;d<c.length;d+=1)b=c.item(d),a=moment.tz(b.getAttribute("datetime"),moment.tz.guess()),b.innerText=a.format("LLLL z")}();/* Counters */const counterSection=document.querySelector(".q-numbers"),observer=new IntersectionObserver(function(a){a.forEach(a=>{a.isIntersecting&&!document.querySelector(".hasScrolled")&&counterupdated()})});observer.observe(counterSection);function counterupdated(){let a=setInterval(function c(){var d=document.getElementById("counter_vul_signatures");d.innerHTML=++b,73==b&&clearInterval(a)},40),b=25;const c=document.querySelector(".q-numbers");c.classList.add("hasScrolled"),setTimeout(()=>{function a(){var a=document.getElementById("counter_scans");a.innerHTML=++c,6==c&&clearInterval(b)}let b=setInterval(a,100),c=0},800),setTimeout(()=>{function a(){var a=document.getElementById("counter_data_points");a.innerHTML=++c,8==c&&clearInterval(b)}let b=setInterval(a,100),c=0},900);let d=setInterval(function a(){var b=document.getElementById("counter_scanning_accuracy");b.innerHTML=++e,99==e&&clearInterval(d)},60),e=59}
//# sourceMappingURL=index.js.map