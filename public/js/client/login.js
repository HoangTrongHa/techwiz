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