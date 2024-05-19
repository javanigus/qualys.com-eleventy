/* global moment:false */"use strict";/*
 * Countdown timer to specific date and time
 */(function(){var a,b,c,d,e,f,g;// 1 second
// calculate difference between two times
// based on time set in user's computer time / OS
// get duration between two times
// loop to countdown every 1 second
f=1e3,c=moment.tz("2022-06-07T10:00:00","America/Los_Angeles"),d=moment.tz(),e=moment.duration(c.diff(d)),setInterval(function(){// get updated duration
e=moment.duration(e-f,"milliseconds"),0>=e.asSeconds()?(clearInterval(g),a=document.querySelector("time"),a.classList.add("hidden")):(b=document.querySelector("time .countdown"),b.innerHTML="<div><span class='num'>"+e.days()+"</span><span class='label'>Days</span></div><div><span class='num'>"+e.hours()+"</span><span class='label'>Hours</span></div><div><span class='num'>"+e.minutes()+"</span><span class='label'>Mins</span></div><div><span class='num'>"+e.seconds()+"</span><span class='label'>Secs</span></div>")},f)})();
//# sourceMappingURL=index.js.map