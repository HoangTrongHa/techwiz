$(document).ready(function() {
    var messages = {
    'nameVal': '入力してください',
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
                required: "入力してください",
                email: "有効なメールアドレスを入力してください",
            },
            emailConfirm: {
            required: "メールアドレスを入力してください。",
            email: "有効なメールアドレスを入力してください。",
            equalTo: "メールの確認がメールと一致しません",
            },
            phoneNumber: {
                required: "入力してください",
            },
            zipCode: {
                required: "入力してください",
            },
            city: {
                required: "入力してください",
            },
            address: {
                required: "入力してください",
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
          $(".errmsg").html("番号を入力してください").show().fadeOut(3000);
                 return false;
      }
     });
});
$(document).ready(function () {
    $(".uintTextBox2").keypress(function (e) {
       if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
          $(".errmsg2").html("番号を入力してください").show().fadeOut(3000);
                 return false;
      }
     });
});