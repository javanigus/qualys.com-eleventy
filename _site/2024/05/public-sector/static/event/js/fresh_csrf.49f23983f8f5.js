
function enableFormulaicForm(){
    $(".forms-submit-container button[type='submit']").prop("disabled", false)
    $(".field-wrapper input").prop("disabled", false)
    $(".field-wrapper select").prop("disabled", false)
}

function disableFormulaicForm(){
    $(".forms-submit-container button[type='submit']").prop("disabled", true)
    $(".field-wrapper input").prop("disabled", true)
    $(".field-wrapper select").prop("disabled", true)
}

function updateCSRF() {
    $.ajax({
        url : "/api/fresh_csrf/",
        type : "GET",
        tryCount : 0,
        retryLimit : 3,
        success : function(data) {
            $('.asyncCSRF').attr("value", data.csrfToken)
            enableFormulaicForm();
        },
        error : function(xhr, textStatus, errorThrown ) {
            this.tryCount++;
                if (this.tryCount <= this.retryLimit) {
                    $.ajax(this);
                    return;
                }
                return;
        }
    });
}

jQuery(document).ready(function () {
    // Lazily update all the CSRF tokens.
    disableFormulaicForm();
    updateCSRF();
})
