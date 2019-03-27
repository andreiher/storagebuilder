$(function () {
    $(".autofill-length button").on("click", function(e) {
        e.preventDefault();

        var value = $(this).attr("data-value");
        var input = $("#lungime");

        input.val(value).trigger("change");
    });

    $(".autofill-height button").on("click", function(e) {
        e.preventDefault();

        var value = $(this).attr("data-value");
        var input = $("#inaltime");

        input.val(value).trigger("change");
    });

    $(".autofill-width button").on("click", function(e) {
        e.preventDefault();

        var value = $(this).attr("data-value");
        var input = $("#latime");

        input.val(value).trigger("change");
    });

    $(".autofill-input button").on("click", function(e) {
        e.preventDefault();

        var value = $(this).attr("data-value");
        var input = $(this).closest(".form-group").find('input');

        input.val(value).trigger("change");
    });

    $("#latime, #lungime").on("change keyup", function() {
        calculateArea();
    });

    function calculateArea() {
        var latime = $("#latime").val();
        var lungime = $("#lungime").val();
        var suprafata_totala = $("#suprafata_totala");

        if(latime.length > 0 && lungime.length > 0) {
            // calculate area
            suprafata_totala.val(parseFloat(latime * lungime).toFixed(2));
            return false;
        }
        suprafata_totala.val("");
    }


    jQuery.validator.setDefaults({
        errorElement: 'span',
        errorPlacement: function (error, element) {
            error.addClass('invalid-feedback');
            element.closest('.form-group').append(error);
        },
        highlight: function (element, errorClass, validClass) {
            $(element).addClass('is-invalid');
        },
        unhighlight: function (element, errorClass, validClass) {
            $(element).removeClass('is-invalid');
        }
    });


});