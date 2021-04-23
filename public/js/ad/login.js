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
                required: "入力してください"
            },
            password: {
                required: "入力してください"
            }
        },
        onfocusout: function(element) {
            this.element(element);
        },
    });

});