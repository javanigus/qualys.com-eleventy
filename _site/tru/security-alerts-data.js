"use strict";const path=require("path"),fs=require("graceful-fs"),http=require("https"),crypto=require("crypto"),URL=require("url"),moment=require("moment-timezone"),mkdirp=require("mkdirp"),contentful=require("contentful-sync-cli/contentful-local"),client=contentful.createClient({space:"4l0w8syj29ap",localPath:"site/cache/contentful"}),QualysOpsRoot=fs.readFileSync(path.resolve(__dirname,"..","..","qualys-ops-root.pem"));// the certificate authority necessary to connect to vuln.intranet.qualys.com
/**
 * getContentfulData - read JSON files in cache folder
 * @returns {Promise} a Promise
 */function getContentfulData(){return client.getEntries({content_type:"securityAlert",order:"-sys.updatedAt"}).then(client.unWrapCollection)}const dir=path.resolve(__dirname,"..","..","cache","vuln-office");/**
 * check disk cache for data
 * @arg {String} the cache key to be hashed
 * @returns {Promise} of data from disk cache
 */function getDataFromDiskCache(a){return new Promise((b,c)=>{let d=crypto.createHash("sha256").update(a).digest("hex");if(d){// look for cache of URL by hash
let e=path.resolve(dir,"".concat(d,".json"));// read in data from file
fs.readFile(e,(d,f)=>{if(d)d.toString().match(/ENOENT/)?b():c(d);else try{b(JSON.parse(f))}catch(b){/* eslint-enable no-console */throw console.log("rawData: ".concat(f)),new Error("Unable to parse JSON data in ".concat(e,". Data came from ").concat(a))}})}else c(new Error("Hash digest could not be generated for ".concat(a)))})}/**
 * save cached data to disk
 * @arg {Object} data
 * @returns {Promise} of data saved
 */function saveDataToDiskCache(a,b){return new Promise((c,d)=>{let e=crypto.createHash("sha256").update(a).digest("hex");if(e){// look for cache of URL by hash
let a=path.resolve(dir,"".concat(e,".json"));// ensure directory exists
mkdirp(dir,e=>{e?d(e):fs.writeFile(a,JSON.stringify(b,null,4),a=>{a?d(a):c(b)})})}else d(new Error("Hash digest could not be generated for ".concat(a)))})}/**
 * getVulnOfficeData
 * @arg {Array} qids
 * @returns {Promise} of data for bulletins
 */function getVulnOfficeData(a){return a?new Promise((b,c)=>{let d;d="https://vuln.intranet.qualys.com/main/ms_bulletin/ms_bulletin_api.php?",d+=a.join(","),getDataFromDiskCache(d).then(a=>{if(a)b(a);else{// workaround since node 6 is missing http.get(url, option, cb)
const a=URL.parse(d);a.path||(a.path="".concat(a.pathname).concat(a.search));const e={hostname:a.hostname,port:443,path:a.path,method:"GET",ca:QualysOpsRoot};// get URL contents
e.agent=new http.Agent(e),http.get(e,a=>{const e=a.statusCode,f=a.headers["content-type"];let g;if(200===e?!/^application\/json/.test(f)&&(g=new Error("Invalid content-type. Expected application/json but received ".concat(f))):g=new Error("Request Failed. Status Code: ".concat(e)),g)return c(g),void a.resume();a.setEncoding("utf8");let h="";a.on("data",a=>h+=a),a.on("end",()=>{try{saveDataToDiskCache(d,JSON.parse(h)).then(b).catch(c)}catch(a){c(a)}})}).on("error",a=>{c(a)})}}).catch(c)}):Promise.resolve([])}// get all security alerts form the Contentful cache
module.exports=getContentfulData().then(a=>{a=a.filter(a=>a),"production"===process.env.NODE_ENV&&(a=a.filter(a=>moment(a.publicationDate).isBefore()));// loop over them
var b=a.map(a=>{// generate URL slug
let b=moment.parseZone(a.publicationDate),c=b.format("YYYY-MM-DD"),d=a.vendor.toLowerCase();// get bulletins from Vuln Office based on QIDs in alert
// use local disk cache if available
// combine bulletins with each alert and return JSON
return a.filename="".concat(c,"/").concat(d,"/index.html"),a.month=b.format("MMMM"),a.year=b.format("YYYY"),getVulnOfficeData(a.qids).then(b=>{a.vulns=b,a.vulns.forEach(function(a){// set level based on severity of each vuln
switch(a.severity){case 5:a.level="Urgent";break;case 4:a.level="Critical";break;case 3:a.level="Serious";break;case 2:a.level="Medium";break;case 1:default:a.level="Minimal"}// check if the solution contains a list of patches
a.solutionDoesNotStartWithPatch=!/^\s*Patch/.test(a.solution)});// count up all CVEs
let c=b.reduce((a,b)=>b.vulnmap&&b.vulnmap.cve?a.concat(b.vulnmap.cve):a,[]);// Sets are always unique
return a.totalCVEs=Array.from(new Set(c)).length,a.manyCVEs=2<=a.totalCVEs,a.manyQIDs=a.vulns.length||!1,a})});return Promise.all(b)});
//# sourceMappingURL=security-alerts-data.js.map