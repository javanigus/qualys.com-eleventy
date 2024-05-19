"use strict";/* global Swiper bodymovin Waypoint */ /*
 * Swiper for customer quotes in hero
 */ // Cloud agents animation
// https://github.com/airbnb/lottie-web
// animation data is exported from Adobe After Effects
(function(){"use strict";new Swiper(".heroBox .swiper-container",{// Optional parameters
loop:!0,// If we need pagination
pagination:{el:".heroBox .swiper-pagination",clickable:!0},autoplay:{delay:5e3,disableOnInteraction:!1,pauseOnMouseEnter:!0}})})(),function(){function a(a,b){return bodymovin.loadAnimation({container:document.getElementById(a),renderer:"svg",loop:!1,autoplay:!1,path:b})}// animation 1
var b=a("cloud-agents","/asset/data/animation1.json"),c=!1,d=document.querySelector(".heroContent")||null;// when animation 1 (above the fold) has been downloaded, only then download and run the other animations (below the fold)
d.addEventListener("heroContentComplete",function(){c||(b.play(),c=!0)}),b.addEventListener("data_ready",function(){function b(a,b,c){var d=!1;new Waypoint({element:document.getElementById(a),offset:b,handler:function handler(a){"down"!==a||d||c.play(),d=!0}})}// animation 2
var c=a("cloud-agent","/asset/data/animation2.json");b("beyond-traditional","80%",c);// animation 3
var d=a("three-agents","/asset/data/animation3.json");b("millions-cloud-agents","60%",d);// animation 4
var e=a("scanners-worldwide","/asset/data/animation4.json");b("scanners-worldwide","60%",e)})}();
//# sourceMappingURL=index.js.map