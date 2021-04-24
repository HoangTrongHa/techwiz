$(document).ready(function() {

    $('.form-login').validate({
        rules: {
            email: {
                required: true
            },
            password: {
                required: true
            }
        },
        messages: {
            email: {
                required: "Value is required"
            },
            password: {
                required: "Value is required"
            }
        },
        onfocusout: function(element) {
            this.element(element);
        },
    });

});
