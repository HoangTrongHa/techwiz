$(document).ready(function() {
    $('#inforQuestion').validate({
        rules: {
            age: {
                required: true,
                maxlenght:3,
            },
            relation: {
                required: true,
            },
            roommate: {
                required: true,
            },
           
        },
        messages: {
            age: {
                required: "入力してください",
                maxlenght: '3文字を超えてはなりません',
            },
            relation: {
                required: '入力してください',
            },
            roommate: {
                required: '入力してください',
            },
           
        },
       
        onfocusout: function(element) {
            this.element(element);
        },
    });
    for (i = new Date().getFullYear(); i > 1950; i--)
    {
        $('.yearpicker').append($('<option />').val(i).html(i))
    }

    var monthNames = ["一月", "二月", "三月", "四月", "五月", "六月", "七月", "八月", "九月", "十月", "十一月", "十二月"];
    for (var i = 0; i <= monthNames.length; i++) {
        $('.monthPicker').append(`<option value="${monthNames[i]}">${monthNames[i]}</option>`);
    }

    $('#yearpicker').prop("disabled", true);
    $('#monthPicker').prop("disabled", true);
    $('#delayDay').prop("disabled", true);
    $('#yearpickerDiet').prop("disabled", true);
    $('#monthPickerDiet').prop("disabled", true);
    $('#delayDayDiet').prop("disabled", true);
    $(".btnYes").click(function(){
            $('#yearpicker').prop("disabled", false);
            $('#monthPicker').prop("disabled", false);
            $('#delayDay').prop("disabled", false);
    });
    $("#radioHistoryOne").click(function(){
        $('#yearpicker').prop("disabled", true);
        $('#monthPicker').prop("disabled", true);
        $('#delayDay').prop("disabled", true);
    });
    $("#dietTwo").click(function(){
            $('#yearpickerDiet').prop("disabled", false);
            $('#monthPickerDiet').prop("disabled", false);
            $('#delayDayDiet').prop("disabled", false);
    });
     $("#dietOne").click(function(){
            $('#yearpickerDiet').prop("disabled", true);
            $('#monthPickerDiet').prop("disabled", true);
            $('#delayDayDiet').prop("disabled", true);
    });
    // $("select.yearpicker").change(function(){
    //     var selectedCountry = $(this).children("option:selected").val();
    //     alert("You have selected the country - " + selectedCountry);
    // });
});
