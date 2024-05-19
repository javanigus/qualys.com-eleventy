// Formulaic Logic
// Sets up showing/hiding conditional fields
function initFormulaicForm() {
    $(".formulaic-data").each((function () {
        let instanceId = $(this).data("form-id")
        let rulesData = $(this).data("rules-data")
        let sharedSiteUrl = "";
        Formulaic.forms.add(instanceId, rulesData, sharedSiteUrl);
    }))
}


function hide_department_field() {
    // Get all divs containing the department select fields
    let department_div = $('select[name*="department"]').closest('.forms-field.field-wrapper.form-group.select');

    if ($('#id_employer').val() === '') {
        department_div.hide();
    }

    $('#id_employer').change(function () {
        if ($(this).val() === '') {
            department_div.hide();
        } else {
            // check if the div is not hidden by the existing formulaic rules
            department_div.each(function () {
                if ($(this).css('display') !== 'none') {
                    $(this).show();
                }
            });
        }
    });
}

function getZipCodeDetails(zipcode) {
    $.ajax({
        url: `/api/zipcode_details/${zipcode}`,
        success: function (response) {
            $("#id_state option").each(function () {
                if ($(this).text() === response.state) {
                    $(this).parent().val($(this).val()).change();
                    return false;
                }
            });
            $('#id_city').val(response.city);
        }
    });
}

function bindZipcodeField() {
    $('#id_zip_code').on('input', function () {
        const zipcode = $(this).val();

        if (zipcode.length === 5) {
            getZipCodeDetails(zipcode);
        }
    });
}


$(document).ready(function () {

    initFormulaicForm();
    hide_department_field();
    bindZipcodeField();

    // It appears that there is some sort of race condition when there is an error
    // on page load. Reinitializing the formualic stuff seems to resolve the problem.
    // I suspect this problem will go away when we reinvent the registration
    // page, so I'm going to be okay with this code existing for the time being.
    if ($(".field-error").length) {
        setTimeout(initFormulaicForm, 1000);
    }
});


// Disclaimer Field Logic.
// Hide or show the extra disclaimer based on details.
$(document).ready(function () {
    $(".formulaic-data").each((function () {
        let choiceField = $(this).data("disclaimer-field")
        let disclaimerFieldValues = $(this).data("disclaimer-field-values")
        let disclaimerDiv = document.getElementById('disclaimer')
        let disclaimerIds = disclaimerFieldValues.map(item => item.id)

        let selectField = document.getElementById(`id_${choiceField}`)
        if (!selectField) {
            selectField = document.getElementById(`id_${choiceField}_1`)
        }

        if (selectField !== null) {
            selectField.addEventListener("change", function () {
                let selectValue = parseInt(selectField.value)
                if (disclaimerIds.includes(selectValue)) {
                    let disclaimer = disclaimerFieldValues.find(item => item.id === parseInt(selectField.value))
                    disclaimerDiv.innerHTML = disclaimer.text
                } else {
                    disclaimerDiv.innerHTML = ""
                }
            });
        }
    }));
});

// Additional Segment Logic.
$(document).ready(function () {

    $(".form").submit(function (e) {
        let trackingData = {};
        $(this).find("input").each(function (e) {
            trackingData[$(this).attr("name")] = $(this).val()
        });

        trackingData["form_name"] = "Registration Form";
        trackingData["form_id"] = $(this).attr("id");
        analytics.track("Registration Form Submitted",
            trackingData
        )
    })
});
