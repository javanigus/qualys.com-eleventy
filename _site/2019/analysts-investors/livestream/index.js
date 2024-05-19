/* global moment:false */"use strict";/*
 * Countdown timer to specific date and time
 */(function(){var a,b,c,d,e,f,g;// 1 second
// calculate difference between two times
// based on time set in user's computer time / OS
// get duration between two times
// loop to countdown every 1 second
f=1e3,c=moment.tz("2019-11-20T12:00:00","America/Los_Angeles"),d=moment.tz(),e=moment.duration(c.diff(d)),setInterval(function(){// get updated duration
e=moment.duration(e-f,"milliseconds"),0>=e.asSeconds()?(clearInterval(g),a=document.querySelector("time"),a.classList.add("hidden")):(b=document.querySelector("time .countdown"),b.innerText=e.days()+" days "+e.hours()+" hours "+e.minutes()+" minutes "+e.seconds()+" seconds")},f)})();
//# sourceMappingURL=index.js.map