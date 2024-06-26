"use strict";/* global anime jQuery  MktoForms2*/ /**
 * function to smoothly scroll page to a target element
 */function smoothScroll(a){const b=document.getElementById(a);if(b){const a=b.offsetTop;window.scrollTo({top:a,behavior:"smooth"})}}// call page scroll events
/**
 * Hero animation
 */ /* global jQuery  MktoForms2*/ /*
 */document.querySelector(".js-goto-footer").addEventListener("click",()=>smoothScroll("footerSection")),document.querySelector(".js-goto-content").addEventListener("click",()=>smoothScroll("contentSection")),function(){const a=document.querySelector(".js-hero-slide1"),b=document.querySelector(".js-hero-slide2");// animate blurry cloud
// bring intro heading after a delay of 1.3 seconds
anime({targets:".js-cloud",translateY:[{value:["-40%","-70%"],delay:1e3},{value:"-100%",delay:2100}],translateX:["-50%","-50%"],opacity:[{value:1,delay:1e3},{value:0,delay:2100}],duration:2e3,easing:"easeOutQuart"}),anime({targets:".js-slide1-txt span",translateY:[{value:[80,0]},{value:-80,delay:2e3}],opacity:[{value:1},{value:0,delay:2e3}],delay:anime.stagger(100,{start:1300},{from:"first"}),easing:"easeOutQuart",complete:function complete(){setTimeout(()=>{a.classList.add("hidden"),b.classList.remove("hidden"),anime({targets:".js-hero-slide2 .stg",translateY:[100,0],opacity:[0,1],delay:anime.stagger(100,{start:500},{from:"first"}),easing:"easeOutQuart"}),anime({targets:".stg2",opacity:1,delay:1e3,duration:500,easing:"easeOutQuart"})},300)}})}(),function(a,b){"use strict";b.onFormRender(function(){setTimeout(function(){a(".mktoButtonWrap button[type=submit]").text("Sign Up")},5)})}(jQuery,MktoForms2);
//# sourceMappingURL=index.js.map