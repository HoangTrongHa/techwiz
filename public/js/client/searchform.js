$(document).ready(function() {

    $('.form-search').validate({
        rules: {
            name: 'required',
            code: 'required',
            email: 'required'
        },
        messages: {
           name: {
               required: '入力してください'
           },
           code: {
               required: '入力してください'
           },
           email: {
               required: '入力してください'
           }
        },
        onfocusout: function(element) {
            this.element(element);
        },
    });

});