"use strict";/* global jQuery MktoForms2 */ /* eslint-disable */ /* eslint-enable */ /*
 * Enable fancybox overlay popup
 */ /*
 * Get hash tag and check product checkbox
 */ /*
 * if user's email address is a federal gov one, require the federal gov package
 */ /*
 * two-panel Marketo form based on the Qualys account question
 */webpackJsonp([5,18,19],{/***/23:(/***/function _(a,b,c){"use strict";var d=c(2),e=function(a){return a&&a.__esModule?a:{default:a}}(d);(0,e.default)()}),/***/40:(/***/function _(){// removed by extract-text-webpack-plugin
/***/}),/***/77:(/***/function _(a,b,c){c(23),a.exports=c(40)})},[77]),function(a){"use strict";a("[data-fancybox]").fancybox({toolbar:!1,smallBtn:!0,iframe:{preload:!1}})}(jQuery),function(a,b){"use strict";function c(){window.location.hash&&window.location.hash.split("/").forEach(function(b){var c,f;// update solutions interested
// update trial package
f=d[b],f&&(a("[value=\""+f+"\"]").prop("checked",!0),a("[value=\""+f+"\"]").trigger("change"),a("input[name=solutionsInterestedOther]").val(f)),c=e[b],c&&(a("[value=\""+c+"\"]").prop("checked",!0),a("[value=\""+c+"\"]").trigger("change"))})}var d={ai:"Asset Inventory",syn:"CMDB Sync",vm:"Vulnerability Management",tp:"Threat Protection",cm:"Continuous Monitoring",ioc:"Indication of Compromise",cs:"Container Security",ci:"Cloud Inventory",csa:"Cloud Security Assessment",was:"Web Application Scanning",waf:"Web Application Firewall",pc:"Policy Compliance",pci:"PCI Compliance",fim:"File Integrity Monitoring",sca:"Security Configuration Assessment",saq:"Security Assessment Questionnaire",cri:"Certificate Inventory",cra:"Certificate Assessment"},e={smb:"Express Lite",sme:"Express",enterprise:"Enterprise",government:"Federal Government"};a(window).on("hashchange",c),a(document).ready(c),a(document).on("click",".mktoButtonNext",c),b.whenRendered(c)}(jQuery,MktoForms2),function(a){"use strict";var b=["@state.gov","@treasury.gov","@defense.gov","@usdoj.gov","@doi.gov","@usda.gov","@commerce.gov","@dol.gov","@hhs.gov","@hud.gov","@dot.gov","@energy.gov","@doe.gov","@ed.gov","@va.gov","@dhs.gov","@epa.gov","@ustr.gov","@sba.gov","@fbi.gov","@fan.gov","@omb.eop.gov","@fema.gov","@ftc.gov","@irs.gov","@ice.gov","@noaa.gov","@cdc.gov","@tsa.gov","@nih.gov","@nrc.gov","@fda.gov","@cbp.gov","@nasa.gov","@ssa.gov","@fec.gov","@faa.gov","@dea.gov","@fcc.gov","@gsa.gov"];a(document).on("click",".mktoButtonNext",function(){var c=!1,d=a("input[name=Email]").val().toLowerCase();// check if email address is federal
b.forEach(function(a){if(d.substr(-1*a.length)===a)return void(c=!0)}),c?(a("div.mktoRadioList.formTrialPackageType label").addClass("hidden"),a("div.formTrialPackageType label:first-child").removeClass("hidden"),a("[value='Federal Government']").prop("checked",!0),a("[value='Federal Government']").trigger("change")):a("div.mktoRadioList.formTrialPackageType label").removeClass("hidden")})}(jQuery),function(a,b){"use strict";b.whenRendered(function(b){var c,d,e,f,g,h,i,j;c=a("input[name=qualysAccount]"),0<c.length&&(g=b.getFormElem(),a(".q-mktoFormSet > *").unwrap(),d=0<g.find(".mktoButtonNext").length?g.find(".mktoButtonNext").closest(".mktoButtonRow"):g.find("input[name=qualysAccount]").closest(".mktoFormRow"),h=d.prevAll().addBack(),i=d.nextAll(),h.wrapAll("<div class='q-mktoFormSet panel1'/>"),i.wrapAll("<div class='q-mktoFormSet panel2'/>"),g.addClass("show-first-panel"),f=c.closest(".mktoRadioList"),f.replaceWith(f.get(0).cloneNode(!0)),e=a("input[name=qualysAccount]:checked").val(),e&&(j=a("input[name=qualysAccount]").closest(".mktoFormRow").prevAll().find("input[type!=hidden]:not(.mktoValid)"),0===j.length&&(g.removeClass("show-first-panel"),g.addClass("show-next-panel"))))}),b.whenReady(function(b){var c,d,e,f;// save for later
// check for the qualys account input
c=b.getFormElem(),d=c.find("input[name=qualysAccount]"),0<d.length&&(e=d.closest(".mktoFormRow"),e.after("<div class=\"mktoButtonRow\"><span class=\"mktoButtonWrap mktoInset\"><button type=\"button\" class=\"mktoButton mktoButtonNext\">Next</button></span></div>"),a(".mktoButtonNext").on("click",function(){var e,f;// validate visible fields
if(b.validate(),e=a("input[name=qualysAccount]:checked").val(),e)b.getValues().qualysAccount===e?e&&(f=a("input[name=qualysAccount]").closest(".mktoFormRow").prevAll().find("input[type!=hidden]:not(.mktoValid)"),0===f.length&&(c.removeClass("show-first-panel"),c.addClass("show-next-panel"))):b.setValues({qualysAccount:e});else{// show error message for Qualys Account field
var g=d.parents(".mktoFieldWrap");b.showErrorMessage("This field is required.",g)}}),f=c.find("button[type=submit]"),f.before("<button type=\"button\" class=\"mktoButton mktoButtonBack\">Back</button>"),a(".mktoButtonBack").on("click",function(){c.addClass("show-first-panel"),c.removeClass("show-next-panel")})),b.onSubmit(function(b){var c,d;// show panel1 if there are any invalid fields there
c=b.getFormElem(),d=a("input[name=qualysAccount]").closest(".mktoFormRow").prevAll().find("input[type!=hidden]:not(.mktoValid)"),0<d.length&&(c.addClass("show-first-panel"),c.removeClass("show-next-panel"))})})}(jQuery,MktoForms2);
//# sourceMappingURL=index.js.map