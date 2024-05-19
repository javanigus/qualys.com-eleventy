"use strict";/* global React ReactDOM ChannelList fetchChannelData */ /*
 * fetch and re-render channel components with latest data
 */(function(){// extract channel data from JSON string in custom data attribute
const a=document.getElementById("channel_data");if(a){const b=JSON.parse(a.innerText);fetchChannelData(b).then(a=>{ReactDOM.render(React.createElement(ChannelList,{channel:b,data:a}),document.getElementById("channel_list_container"))}).catch(a=>{throw a})}})();
//# sourceMappingURL=channels.js.map