"use strict";function _typeof(a){"@babel/helpers - typeof";return _typeof="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(a){return typeof a}:function(a){return a&&"function"==typeof Symbol&&a.constructor===Symbol&&a!==Symbol.prototype?"symbol":typeof a},_typeof(a)}function _classCallCheck(a,b){if(!(a instanceof b))throw new TypeError("Cannot call a class as a function")}function _defineProperties(a,b){for(var c,d=0;d<b.length;d++)c=b[d],c.enumerable=c.enumerable||!1,c.configurable=!0,"value"in c&&(c.writable=!0),Object.defineProperty(a,c.key,c)}function _createClass(a,b,c){return b&&_defineProperties(a.prototype,b),c&&_defineProperties(a,c),a}function _inherits(a,b){if("function"!=typeof b&&null!==b)throw new TypeError("Super expression must either be null or a function");a.prototype=Object.create(b&&b.prototype,{constructor:{value:a,writable:!0,configurable:!0}}),b&&_setPrototypeOf(a,b)}function _setPrototypeOf(a,b){return _setPrototypeOf=Object.setPrototypeOf||function(a,b){return a.__proto__=b,a},_setPrototypeOf(a,b)}function _createSuper(a){var b=_isNativeReflectConstruct();return function(){var c,d=_getPrototypeOf(a);if(b){var e=_getPrototypeOf(this).constructor;c=Reflect.construct(d,arguments,e)}else c=d.apply(this,arguments);return _possibleConstructorReturn(this,c)}}function _possibleConstructorReturn(a,b){return b&&("object"===_typeof(b)||"function"==typeof b)?b:_assertThisInitialized(a)}function _assertThisInitialized(a){if(void 0===a)throw new ReferenceError("this hasn't been initialised - super() hasn't been called");return a}function _isNativeReflectConstruct(){if("undefined"==typeof Reflect||!Reflect.construct)return!1;if(Reflect.construct.sham)return!1;if("function"==typeof Proxy)return!0;try{return Date.prototype.toString.call(Reflect.construct(Date,[],function(){})),!0}catch(a){return!1}}function _getPrototypeOf(a){return _getPrototypeOf=Object.setPrototypeOf?Object.getPrototypeOf:function(a){return a.__proto__||Object.getPrototypeOf(a)},_getPrototypeOf(a)}if("undefined"!=typeof require)var React=require("react"),_=require("lodash");var FilterablePartnerEntries=/*#__PURE__*/function(a){function b(a){var d;return _classCallCheck(this,b),d=c.call(this,a),d.state={regionSelected:"",countrySelected:"",msspChecked:!0,varChecked:!0,vadChecked:!0},d.handleRegionSelectChange=d.handleRegionSelectChange.bind(_assertThisInitialized(d)),d.handleCountrySelectChange=d.handleCountrySelectChange.bind(_assertThisInitialized(d)),d.handleMsspChange=d.handleMsspChange.bind(_assertThisInitialized(d)),d.handleVarChange=d.handleVarChange.bind(_assertThisInitialized(d)),d.handleVadChange=d.handleVadChange.bind(_assertThisInitialized(d)),d}_inherits(b,a);var c=_createSuper(b);return _createClass(b,[{key:"handleRegionSelectChange",value:function handleRegionSelectChange(a){this.setState({regionSelected:a,countrySelected:""})}},{key:"handleCountrySelectChange",value:function handleCountrySelectChange(a){this.setState({countrySelected:a,regionSelected:""})}},{key:"handleMsspChange",value:function handleMsspChange(a){this.setState({msspChecked:a})}},{key:"handleVarChange",value:function handleVarChange(a){this.setState({varChecked:a})}},{key:"handleVadChange",value:function handleVadChange(a){this.setState({vadChecked:a})}},{key:"render",value:function render(){return/*#__PURE__*/React.createElement("div",null,/*#__PURE__*/React.createElement("div",{className:"q-default-hero q-default-hero--"},/*#__PURE__*/React.createElement("div",{className:"q-default-hero__container"},/*#__PURE__*/React.createElement("div",{className:"q-default-hero__content heroContent"},/*#__PURE__*/React.createElement("h1",{className:"q-default-hero__heading"},"Find a Cyber Security partner."),/*#__PURE__*/React.createElement("h2",{className:"q-default-hero__subheading"},"To find a Qualys partner in your region, please select from the list below.")),/*#__PURE__*/React.createElement("div",{className:"q-default-hero__splash"},/*#__PURE__*/React.createElement("div",{className:"q-default-hero__box-wrap heroBox"},/*#__PURE__*/React.createElement(FilterBox,{partners:this.props.partners,regionSelected:this.state.regionSelected,countrySelected:this.state.countrySelected,msspChecked:this.state.msspChecked,varChecked:this.state.varChecked,vadChecked:this.state.vadChecked,onRegionSelectChange:this.handleRegionSelectChange,onCountrySelectChange:this.handleCountrySelectChange,onMsspChange:this.handleMsspChange,onVarChange:this.handleVarChange,onVadChange:this.handleVadChange})),/*#__PURE__*/React.createElement("div",{className:"q-default-hero__image heroImage"})))),/*#__PURE__*/React.createElement("div",{className:"q-grid__container"},/*#__PURE__*/React.createElement("div",{className:"q-grid__inner"},/*#__PURE__*/React.createElement("div",{className:"q-grid__row"},/*#__PURE__*/React.createElement("div",{className:"q-grid__column q-grid__column-10 partners"},/*#__PURE__*/React.createElement("div",{className:"partners-local"},/*#__PURE__*/React.createElement("h2",{className:"heading--2"},"Local:"),/*#__PURE__*/React.createElement("p",{className:"no-partners-found hidden paragraph--1"},"No local partners found."),/*#__PURE__*/React.createElement(PartnerEntry,{partners:this.props.partners,isWorldwide:"false",regionSelected:this.state.regionSelected,countrySelected:this.state.countrySelected,msspChecked:this.state.msspChecked,varChecked:this.state.varChecked,vadChecked:this.state.vadChecked})),/*#__PURE__*/React.createElement("div",{className:"partners-worldwide"},/*#__PURE__*/React.createElement("h2",{className:"heading--2"},"Worldwide:"),/*#__PURE__*/React.createElement("p",{className:"no-partners-found hidden"},"No worldwide partners found in this region / country."),/*#__PURE__*/React.createElement(PartnerEntry,{partners:this.props.partners,isWorldwide:"true",regionSelected:this.state.regionSelected,countrySelected:this.state.countrySelected,msspChecked:this.state.msspChecked,varChecked:this.state.varChecked,vadChecked:this.state.vadChecked})),/*#__PURE__*/React.createElement("div",{className:"clear"}),/*#__PURE__*/React.createElement("br",null),/*#__PURE__*/React.createElement("p",{className:"note"},"Partners may serve multiple territories. For regional offices please visit the partner website or call the # listed."))))))}}]),b}(React.Component),RegionCountrySelectFields=/*#__PURE__*/function(a){function b(a){var d;return _classCallCheck(this,b),d=c.call(this,a),d.state={region:"",country:""},d.regionSelect=React.createRef(),d.countrySelect=React.createRef(),d.handleRegionSelectChange=d.handleRegionSelectChange.bind(_assertThisInitialized(d)),d.handleCountrySelectChange=d.handleCountrySelectChange.bind(_assertThisInitialized(d)),d}_inherits(b,a);var c=_createSuper(b);return _createClass(b,[{key:"handleRegionSelectChange",value:function handleRegionSelectChange(a){this.props.onRegionSelectChange(a.target.value),this.setState({region:a.target.value,country:""})}},{key:"handleCountrySelectChange",value:function handleCountrySelectChange(a){this.props.onCountrySelectChange(a.target.value),this.setState({region:"",country:a.target.value})}},{key:"render",value:function render(){var a=this.props.partners.map(function(a){var b=a.regions.map(function(a){return a});return b[0]}),b=a.filter(function(a){return a.id}),c=_.sortBy(b,"id"),d=_.sortedUniqBy(c,function(a){return a.id}),e=d.map(function(a){return/*#__PURE__*/React.createElement("option",{key:a.id,value:a.id},a.name)}),f=this.props.partners.map(function(a){return{country:a.country,countryId:a.countryId}}),g=f.filter(function(a){return a.countryId}),h=_.sortBy(g,"countryId"),i=_.sortedUniqBy(h,function(a){return a.countryId}),j=i.map(function(a){return/*#__PURE__*/React.createElement("option",{key:a.countryId,value:a.countryId},a.country)});return/*#__PURE__*/React.createElement("div",null,/*#__PURE__*/React.createElement("label",{htmlFor:"region"},"Region"),/*#__PURE__*/React.createElement("select",{name:"region",ref:this.regionSelect,value:this.state.region,className:"q-form__select",onChange:this.handleRegionSelectChange},/*#__PURE__*/React.createElement("option",{value:""},"Region"),/*#__PURE__*/React.createElement("option",{value:"all"},"All Regions"),e),/*#__PURE__*/React.createElement("label",{htmlFor:"country"},"Country"),/*#__PURE__*/React.createElement("select",{name:"country",ref:this.countrySelect,value:this.state.country,className:"q-form__select",onChange:this.handleCountrySelectChange},/*#__PURE__*/React.createElement("option",{value:""},"Country"),/*#__PURE__*/React.createElement("option",{value:"all"},"All Countries"),j))}}]),b}(React.Component),FilterBox=/*#__PURE__*/function(a){function b(a){var d;return _classCallCheck(this,b),d=c.call(this,a),d.handleRegionSelectChange=d.handleRegionSelectChange.bind(_assertThisInitialized(d)),d.handleCountrySelectChange=d.handleCountrySelectChange.bind(_assertThisInitialized(d)),d.handleMsspChange=d.handleMsspChange.bind(_assertThisInitialized(d)),d.handleVarChange=d.handleVarChange.bind(_assertThisInitialized(d)),d.handleVadChange=d.handleVadChange.bind(_assertThisInitialized(d)),d}_inherits(b,a);var c=_createSuper(b);return _createClass(b,[{key:"handleRegionSelectChange",value:function handleRegionSelectChange(a){this.props.onRegionSelectChange(a)}},{key:"handleCountrySelectChange",value:function handleCountrySelectChange(a){this.props.onCountrySelectChange(a)}},{key:"handleMsspChange",value:function handleMsspChange(a){this.props.onMsspChange(a.target.checked)}},{key:"handleVarChange",value:function handleVarChange(a){this.props.onVarChange(a.target.checked)}},{key:"handleVadChange",value:function handleVadChange(a){this.props.onVadChange(a.target.checked)}},{key:"render",value:function render(){return/*#__PURE__*/React.createElement("div",{className:"q-square"},/*#__PURE__*/React.createElement("div",{className:"q-square__inner"},/*#__PURE__*/React.createElement("div",{className:"q-square__content"},/*#__PURE__*/React.createElement(RegionCountrySelectFields,{partners:this.props.partners,region:this.props.region,onRegionSelectChange:this.handleRegionSelectChange,country:this.props.country,onCountrySelectChange:this.handleCountrySelectChange}),/*#__PURE__*/React.createElement("label",{htmlFor:"type"},"Partner types:"),/*#__PURE__*/React.createElement("div",{className:"type"},/*#__PURE__*/React.createElement("div",{className:"type-container"},/*#__PURE__*/React.createElement("input",{name:"type",value:"msp",id:"msp",type:"checkbox",checked:this.props.msspChecked,onChange:this.handleMsspChange}),/*#__PURE__*/React.createElement("label",{htmlFor:"msp"},/*#__PURE__*/React.createElement("abbr",{title:"Managed security service provider"},"MSP/MSSP")," Partner")),/*#__PURE__*/React.createElement("div",{className:"type-container"},/*#__PURE__*/React.createElement("input",{name:"type",value:"var",id:"var",type:"checkbox",checked:this.props.varChecked,onChange:this.handleVarChange}),/*#__PURE__*/React.createElement("label",{htmlFor:"var"},/*#__PURE__*/React.createElement("abbr",{title:"Value-Added Reseller (VAR)"},"Value-Added Reseller (VAR)"))),/*#__PURE__*/React.createElement("div",{className:"type-container"},/*#__PURE__*/React.createElement("input",{name:"type",value:"vad",id:"vad",type:"checkbox",checked:this.props.vadChecked,onChange:this.handleVadChange}),/*#__PURE__*/React.createElement("label",{htmlFor:"vad"},/*#__PURE__*/React.createElement("abbr",{title:"Value-Added Distributor (VAD)"},"Value-Added Distributor (VAD)")))))))}}]),b}(React.Component),PartnerBadges=/*#__PURE__*/function(a){function b(){return _classCallCheck(this,b),c.apply(this,arguments)}_inherits(b,a);var c=_createSuper(b);return _createClass(b,[{key:"render",value:function render(){var a,b,c;return this.props.isMsp&&(c=/*#__PURE__*/React.createElement("div",{className:"partner__badge partner__badge--msp"},"MSSP")),this.props.isVar&&(a=/*#__PURE__*/React.createElement("div",{className:"partner__badge partner__badge--var"},"VAR")),this.props.isVad&&(b=/*#__PURE__*/React.createElement("div",{className:"partner__badge partner__badge--vad"},"VAD")),/*#__PURE__*/React.createElement("div",{className:"badge-container"},c,a,b)}}]),b}(React.Component),PartnerEntry=/*#__PURE__*/function(a){function b(){return _classCallCheck(this,b),c.apply(this,arguments)}_inherits(b,a);var c=_createSuper(b);return _createClass(b,[{key:"render",value:function render(){var a=this,b=this.props.partners.map(function(b){var c=!1,d=!1,e=!1;if((b.isMsp&&a.props.msspChecked||b.isVar&&a.props.varChecked||b.isVad&&a.props.vadChecked)&&(c=!0),(0<=b.regionId.indexOf(a.props.regionSelected)||"all"===a.props.regionSelected||""===a.props.regionSelected)&&(d=!0),(b.countryId===a.props.countrySelected||"all"===a.props.countrySelected||""===a.props.countrySelected)&&(e=!0),void 0===b.isWorldwide&&(b.isWorldwide="false"),b.isWorldwide.toString()===a.props.isWorldwide&&c&&d&&e){var f=b.name;null!==b.website&&""!==b.website&&(f=/*#__PURE__*/React.createElement("a",{href:b.website,target:"_blank",rel:"noopener noreferrer"},b.name));var g="";null!==b.city&&(g=b.city+","+g),null!==b.state&&(g=g+" "+b.state),null!==b.country&&(g=g+" "+b.country);var h="";return h=""!==g.trim()&&null!==b.phone?/*#__PURE__*/React.createElement("p",null,g,/*#__PURE__*/React.createElement("br",null),b.phone):null===b.phone?g:b.phone,/*#__PURE__*/React.createElement("div",{key:b.id,className:"partner"},/*#__PURE__*/React.createElement("p",{className:"paragraph--1 partner__name"},f),h,/*#__PURE__*/React.createElement(PartnerBadges,{isVar:b.isVar,isVad:b.isVad,isMsp:b.isMsp}))}});return/*#__PURE__*/React.createElement("div",null,b)}}]),b}(React.Component);"undefined"!=typeof module&&(module.exports=FilterablePartnerEntries);
//# sourceMappingURL=FilterablePartnerEntries.js.map