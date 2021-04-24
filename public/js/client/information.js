$(document).ready(function() {
    var messages = {
    'nameVal': 'Value is required',
    };

    $('#informationForm').validate({
        rules: {
            name: {
            required: true,
            minlength: 3
            },
            email: {
                required: true,
                email: true
            },
            emailConfirm: {
                required: true,
                email: true,
                equalTo: email,
            },
            phoneNumber: {
                required: true,
            },
            zipCode: {
                required: true,
            },
            city: {
               required: true,
            },
            address: {
                required: true,
            }
        },
        messages: {
            name: messages.nameVal,
            email: {
                required: "Value is required",
                email: "Please enter a valid email address",
            },
            emailConfirm: {
            required: "Please enter your e-mail address",
            email: "Please enter a valid email address",
            equalTo: "Email confirmation does not match email\n",
            },
            phoneNumber: {
                required: "Value is required",
            },
            zipCode: {
                required: "Value is required",
            },
            city: {
                required: "Value is required",
            },
            address: {
                required: "Value is required",
            }
        },
        onfocusout: function(element) {
            this.element(element);
        },
    });

});

$(document).ready(function () {
    $(".uintTextBox").keypress(function (e) {
       if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
          $(".errmsg").html("\n" +
              "Please enter the number").show().fadeOut(3000);
                 return false;
      }
     });
});
$(document).ready(function () {
    $(".uintTextBox2").keypress(function (e) {
       if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
          $(".errmsg2").html("Please enter the number\n").show().fadeOut(3000);
                 return false;
      }
     });
});
