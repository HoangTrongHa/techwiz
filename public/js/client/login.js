$(document).ready(function() {

    $('.form-login').validate({
        rules: {
            code: {
                required: true
            },
            password: {
                required: true
            }
        },
        messages: {
            code: {
                required: "Please enter your ID"
            },
            password: {
                required: "Enter password"
            }
        },
        onfocusout: function(element) {
            this.element(element);
        },
    });

});
