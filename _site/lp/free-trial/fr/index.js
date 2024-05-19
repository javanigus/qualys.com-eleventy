"use strict";/* global jQuery MktoForms2*/ /*
 * Group last two words in radio button label to improve line wrapping
 */(function(a){"use strict";MktoForms2.whenReady(function(){a(document).on("cleanMarketoHTMLAndCSSComplete",function(){var b=a(".qmktoRadioListLabel").text(),c=b.split(" "),d=c.pop(),e=c.pop(),f=c.join(" ");a(".qmktoRadioListLabel").html(f+" <span class=\"nowrap\">"+e+" "+d+"</span> ")})})})(jQuery);
//# sourceMappingURL=index.js.map