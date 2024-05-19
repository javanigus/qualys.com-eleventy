"use strict";/* global jQuery:false */ // put form into sentence format
// dynamically resize text fields based on value length
(function(a){"use strict";a(document).on("cleanMarketoHTMLAndCSSComplete",function(){// add text between form fields
// lowercase field placeholder names
a(".field").each(function(b,c){var d=a(c).attr("data-fieldId"),e=a(c).attr("data-text");a(".mktoFormRow").each(function(b,c){a(c).hasClass(d)&&a(c).before("<span class='text "+d.toLowerCase().replace(" ","")+"'>"+e+"</span>")})}),a(".mktoFormRow.Email").after("<span class='text'>.</span>"),a(".q-form input").each(function(b,c){var d=a(c).attr("placeholder");d!==void 0&&a(c).attr("placeholder",d.toLowerCase())})})})(jQuery),function(a){"use strict";a(document).on("cleanMarketoHTMLAndCSSComplete",function(){a(document).on("blur","input[type='text'], input[type=email]",function(){var b=a(this).val();if(b!==void 0){var c=b.length;0<c&&a(this).css("width",c+"em")}})})}(jQuery);
//# sourceMappingURL=index.js.map