"use strict";/* global React ReactDOM FilterablePartnerEntries */ /*
 * fetch and re-render partners listings with latest data
 */(function(){"use strict";var a=window.location.origin+"/partners/find/partners.json";fetch(a).then(function(a){return a.json()}).then(function(a){window.qualys.utils.animateQualysHero();var b=document.getElementById("reactapp");ReactDOM.hydrate(React.createElement(FilterablePartnerEntries,{partners:a}),b)})})();
//# sourceMappingURL=find.js.map