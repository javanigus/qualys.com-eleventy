"use strict";const moment=require("moment-timezone"),contentful=require("contentful-sync-cli/contentful-local"),client=contentful.createClient({space:"4l0w8syj29ap",localPath:"site/cache/contentful"});/**
 * helper function to create ids from strings
 * @arg {String}
 * @returns {String} with only word characters and dashes
 */function generateHtmlSafeIDs(a){return a&&a.toLowerCase().replace(/\W+/g,"-").replace(/^-+|-+$/g,"").trim()}// truncate a string by n characters with optional word boundary
function truncate(a,b,c){if(a=a.trim(),a.length<=b)return a;let d=a.substr(0,b-1),e=d;return c&&(e=d.replace(/\b\w+$/,"").replace(/\W+$/,"")),e+"\u2026"}module.exports=client.getEntries({content_type:"resource","fields.type":"Webcast",order:"-fields.eventDate"}).then(client.unWrap).then(function(a){// function to sort array of objects by property
function b(c){var d=1;return"-"===c[0]&&(d=-1,c=c.substr(1)),function(e,a){var b=e[c]<a[c]?-1:e[c]>a[c]?1:0;return b*d}}a.items=a.items.filter(a=>0<Object.keys(a).length);var c,d,e,f;e=a.items.filter(a=>"Webcast"===a.type),c=e.filter(a=>!a.eventDate||moment(a.eventDate).isBefore()),d=e.filter(a=>!a.eventDate||moment(a.eventDate).isAfter()),c.sort(b("-eventDate")),d.sort(b("eventDate")),f=d.concat(c),"production"===process.env.NODE_ENV&&(e=e.filter(a=>!a.publicationDate||moment(a.publicationDate).isBefore()));// get the type of all entries
var g=a.items.map(a=>a.type);// get a uniq Set of types
return g=Array.from(new Set(g)),g=g.map(a=>({id:generateHtmlSafeIDs(a),name:a})),a.items=a.items.map(a=>{var b=[""];// append resource-new class name
// when publication date is less than 2 months old
if(a.publicationDate){var c=moment.parseZone(a.publicationDate);c.isAfter(moment().subtract(2,"months"))&&b.push("resource-new")}return"Webcast"===a.type&&(a.description&&(a.description=truncate(a.description,90,!0)),a.webcast=!0),a.cssClass=b.join(" "),a.typeId=generateHtmlSafeIDs(a.type),a}),a.typesAndResources=g.map(b=>({type:b,items:a.items.filter(a=>a.type===b.name)})),e=f.slice(0,2),e});
//# sourceMappingURL=webinars-data.js.map