"use strict";/*
 * universal functions to fetch community content from various APIs
 * TODO wrap with UMD
 */const CORPSITE_API_PREFIX="https://qualys-marketing-api.herokuapp.com";let contentful,proxy=!1;if("undefined"!=typeof require){// proxy code
if(require("cross-fetch/polyfill"),contentful=require("contentful"),process.env.HTTPS_PROXY){let a=new URL(process.env.HTTPS_PROXY);proxy={host:a.hostname,port:a.port}}// NOTE global-tunnel-ng seems to remove the proxy environment variables
require("global-tunnel-ng").initialize()}else contentful=window.contentful;// fetch support KBs from Coveo (or Salesforce)
// ??? waiting for input from Robert
// fetch documentation by tag from Contentful
// fetch promo (optionally by tag) from Contentful
// PHASE 2?
// Coveo: fetch recommended by page from Coveo
// fetch training (optionally by class) from GeoLearning
/*
 * helper class to handle HTTP response errors
 */class HTTPResponseError extends Error{constructor(a){super(),this.url=a.url,this.status=a.status,this.statusText=a.statusText,this.message="request to ".concat(this.url," failed, reason: HTTP ").concat(this.category," ").concat(this.status," ").concat(this.statusText),this.name="HTTPResponseError"}get category(){const a=Math.floor(this.status/100)+"xx";return this.constructor.categories[a]}}HTTPResponseError.categories={"1xx":"Informational","2xx":"Successful","3xx":"Redirection","4xx":"Client Error","5xx":"Server Error"};/*
 * collect data for the Homepage
 */function fetchHomepageData(){return Promise.all([fetchRecentContent(),fetchTrendingContent(),fetchTrendingPeople(),fetchHomepageVideos(),fetchWhatsNew(),fetchTopArticles(),fetchBlogPosts(),fetchNotifications(),fetchRecentQIDs()]).then(a=>Promise.resolve({content:a[0],trending:{content:a[1],people:a[2]},videos:a[3],news:a[4],articles:a[5],posts:a[6],notifications:a[7],qids:a[8]}))}/*
 * collect data for the app channel pages
 */function fetchChannelData(a){return Promise.all([fetchRecentContent({topicId:a.salesforceTopicId}),fetchTrendingContent({topicId:a.salesforceTopicId}),fetchTrendingPeople({topicId:a.salesforceTopicId}),fetchChannelVideos({channel_id:a.vimeoChannelId}),fetchWhatsNew({tags:a.tags}),fetchTopArticles({tags:a.tags}),fetchRecentQIDs({urlSlug:a.urlSlug})]).then(a=>Promise.resolve({content:a[0],trending:{content:a[1],people:a[2]},videos:a[3],news:a[4],articles:a[5],qids:a[6]}))}/*
 * fetch recent QIDs from JSON data file
 */function fetchRecentQIDs(a){if("undefined"!=typeof require)return require("./vulnerability-detection-pipeline/qids.json.data.js").then(a=>a.qids.slice(0,4));else{let b="vulnerability-detection-pipeline/qids.json";return a&&a.urlSlug&&(b="../".concat(b)),fetch(b).then(a=>{if(!a.ok)throw new HTTPResponseError(a);return a.json()}).then(a=>a.slice(0,4))}}//const wordpressPrefix = "https://public-api.wordpress.com/rest/v1.1/sites/blog.qualys.com";
let wordpressPrefix="".concat("https://qualys-marketing-api.herokuapp.com","/wordpress");/*
 * fetch blog posts from WordPress
 */function fetchBlogPosts(a){let b=3,c="".concat(wordpressPrefix,"/posts/");// tell wordpress exactly which fileds we want
return c+="?fields=ID,date,URL,title,author,content,categories",a&&a.number&&(b=encodeURIComponent(a.number)),c+="&per_page=number",fetch(c).then(a=>{if(!a.ok)throw new HTTPResponseError(a);return a.json().then(a=>{let c=a.posts;// trim to number requested
return c.slice(0,b)})})}//const wordpressNotificationsPrefix = "https://public-api.wordpress.com/rest/v1.1/sites/notifications.qualys.com";
let wordpressNotificationsPrefix="".concat("https://qualys-marketing-api.herokuapp.com","/notifications");/*
 * fetch notifications from WordPress
 */function fetchNotifications(a){let b=4,c="".concat(wordpressNotificationsPrefix,"/posts/");return a&&a.number&&(b=encodeURIComponent(a.number)),c+="?number=".concat(b),c+="&fields=ID,date,URL,title",fetch(c).then(a=>{if(!a.ok)throw new HTTPResponseError(a);return a.json().then(a=>{let b=a.posts;return b})})}/*
 * helper
 */function createContentfulClient(){let a=new URL(CORPSITE_API_PREFIX),b={space:"5pe4or9i232n",accessToken:"the contentful library requires this field; token is actually provided by our api proxy",insecure:"https:"!==a.protocol,host:a.host,basePath:"/contentful/",proxy:proxy};// Contentful SDK 7.3.0 seems to ignore localhost
return"localhost"===a.hostname&&(b.host="127.0.0.1:".concat(a.port)),contentful.createClient(b)}function handleContentfulClientError(a){throw a.response&&(a.response.url=a.response.request.res.responseUrl,a=new HTTPResponseError(a.response)),a}/*
 * fetch What's New links from Contentful
 * (optionally) filter by tag(s)
 */function fetchWhatsNew(a){const b=createContentfulClient(),c=Object.assign({},{content_type:"news",limit:3,order:"-fields.publicationDate,-sys.updatedAt,-sys.createdAt"},a);return c.tags&&(c["fields.tags[in]"]=c.tags.join(","),delete c.tags),b.getEntries(c).catch(handleContentfulClientError)}/*
 * fetch Top Article links from Contentful
 * TODO (optionally) filter by tag(s)
 */function fetchTopArticles(a){const b=createContentfulClient(),c=Object.assign({},{content_type:"featuredArticle",limit:3,order:"-fields.publicationDate,-sys.updatedAt,-sys.createdAt"},a);return c.tags&&(c["fields.tags[in]"]=c.tags.join(","),delete c.tags),b.getEntries(c).catch(handleContentfulClientError)}/*
 * fetch videos from Vimeo
 * https://api.vimeo.com/users/{user_id}/videos
 * let our proxy handle authentication
 */function fetchVideos(a){var b=a.per_page||4,c=a.channel_ids||[];return Promise.all(c.map(a=>fetchChannelVideos({channel_id:a}))).then(a=>(a=a.filter(a=>a),a=a.map(a=>a.data),a=[].concat(...a),a.sort((c,a)=>(c=c.release_time,a=a.release_time,c<a?1:c>a?-1:0)),a.length>b&&(a=a.slice(0,b)),Promise.resolve({data:a})))}/*
 * fetch a bunch of videos from the Community Homepage channel
 * and "round robin" through the list of videos
 */function fetchHomepageVideos(a){a=Object.assign({},{channel_id:1472579,per_page:4},a);// save original per_page value and request five times as many
const b=a.per_page;return a.per_page=5*b,30<a.per_page&&(a.per_page=30),fetchChannelVideos(a).then(a=>{var c,d,e,f;// rotate through the videos
return f=60/a.data.length,e=new Date().getMinutes(),c=Math.floor(e/f),d=a.data.splice(0,c),a.data=a.data.concat(d),a.data=a.data.slice(0,b),a})}/*
 * fetch videos from Vimeo channels
 * let our proxy handle authentication
 * use Vimeo channels for each app to curate videos
 * order by default channel order
 */function fetchChannelVideos(a){let b="",c=4,d="default",e=a.channel_id;if(!e)//console.warn(`Invalid Vimeo channel id: ${channel_id}`);
return Promise.resolve(null);let f="".concat(CORPSITE_API_PREFIX,"/vimeo"),g="".concat("https://qualys-marketing-api.herokuapp.com/vimeo","/channels/").concat(e,"/videos"),h="uri,name,description,link,release_time,pictures,metadata";// use field filtering and get double the normal rate-limiting
if(a&&a.per_page&&(c=encodeURIComponent(a.per_page)),g+="?per_page=".concat(c),a&&a.direction&&(b=encodeURIComponent(a.direction)),b&&(g+="&direction=".concat(b)),a&&a.sort&&(d=encodeURIComponent(a.sort)),d&&(g+="&sort=".concat(d)),a&&a.fields&&(h=encodeURIComponent(a.fields)),g+="&fields=".concat(h),a&&a.page){let b=encodeURIComponent(a.page);g+="&page=".concat(b)}if(a&&a.query){let b=encodeURIComponent(a.query);g+="&query=".concat(b)}return fetch(g).then(a=>{if(!a.ok)throw new HTTPResponseError(a);return a.json()}).then(a=>{// find and fetch credits
const b=a.data.map(a=>{if(1<a.metadata.connections.credits.total){// fetch additional credits
// TODO use field filtering and get double the normal rate-limiting
return fetch("".concat("https://qualys-marketing-api.herokuapp.com/vimeo").concat(a.metadata.connections.credits.uri,"?fields=").concat("role,name")).then(b=>{if(!b.ok)throw new HTTPResponseError(b);return b.json().then(b=>(Object.assign(a.metadata.connections.credits,b),Promise.resolve(a))).catch(a=>Promise.reject(a))}).catch(a=>Promise.reject(a))}return Promise.resolve(a)});return Promise.all(b).then(()=>Promise.resolve(a))})}const sfdcPrefix="".concat("https://qualys-marketing-api.herokuapp.com","/sfdc");/*
 * fetch recent discussions (optionally filter by tags) from Salesforce
 */function fetchRecentContent(a){let b,c="".concat(sfdcPrefix,"/recent-feed-items"),d=10,e=[];return a&&a.count&&(d=encodeURIComponent(a.count)),c+="?pageSize=".concat(d),a&&a.tags&&(e=a.tags.map(encodeURIComponent),c+="&topics=(".concat(e.join(","),")")),a&&a.topicId&&(b=encodeURIComponent(a.topicId),c+="&topicId=".concat(b)),fetch(c).then(a=>{if(!a.ok)throw new HTTPResponseError(a);return a.json()})}/*
 * fetch trending content (optionally by Topic ID) from Salesforce
 */function fetchTrendingContent(a){let b=3,c=null,d="".concat(sfdcPrefix,"/trending-feed-items");return a&&a.count&&(b=encodeURIComponent(a.count)),d+="?pageSize=".concat(b),a&&a.topicId&&(c=encodeURIComponent(a.topicId),d+="&topicId=".concat(c)),fetch(d).then(a=>{if(!a.ok)throw new HTTPResponseError(a);return a.json()})}/*
 * fetch top contributors (optionally by placeID) from Jive
 */function fetchTrendingPeople(a){let b=5,c=null,d="".concat(sfdcPrefix,"/leaderboard");return a&&a.count&&(b=encodeURIComponent(a.count)),d+="?pageSize=".concat(b),a&&a.topicId&&(c=encodeURIComponent(a.topicId),d+="&topicId=".concat(c)),fetch(d).then(a=>{if(!a.ok)throw new HTTPResponseError(a);return a.json()})}var api={fetchChannelData:fetchChannelData,fetchHomepageData:fetchHomepageData,fetchRecentContent:fetchRecentContent,fetchTopArticles:fetchTopArticles,fetchTrendingContent:fetchTrendingContent,fetchTrendingPeople:fetchTrendingPeople,fetchVideos:fetchVideos,fetchHomepageVideos:fetchHomepageVideos,fetchChannelVideos:fetchChannelVideos,fetchWhatsNew:fetchWhatsNew};"undefined"==typeof module?window.fetchContent=api:module.exports=api;
//# sourceMappingURL=fetch-content.js.map