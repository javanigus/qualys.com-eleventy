"use strict";/* global jQuery */ /*
 * Wrap Marketo form fields to support two column layout
 */(function(a){"use strict";a(document).on("alterFormValuesComplete",function(){a(".mktoFormRow.FirstName, \t\t\t.mktoFormRow.LastName, \t\t\t.mktoFormRow.Title, \t\t\t.mktoFormRow.Company, \t\t\t.mktoFormRow.Email, \t\t\t.mktoFormRow.Phone").wrapAll("<div class=\"fieldsWrapper\" />")})})(jQuery);
//# sourceMappingURL=index.js.map