$(document).ready(function() {

    $('.form-search').validate({
        rules: {
            name: 'required',
            code: 'required',
            email: 'required'
        },
        messages: {
           name: {
               required: 'Value is required'
           },
           code: {
               required: 'Value is required'
           },
           email: {
               required: 'Value is required'
           }
        },
        onfocusout: function(element) {
            this.element(element);
        },
    });

});
