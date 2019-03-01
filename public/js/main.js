$(function () {
    $(".autofill-length button").on("click", function(e) {
        e.preventDefault();

        var value = $(this).attr("data-value");
        var input = $("#length");

        input.val(value).trigger("change");
    });

    $(".autofill-height button").on("click", function(e) {
        e.preventDefault();

        var value = $(this).attr("data-value");
        var input = $("#height");

        input.val(value).trigger("change");
    });

    $(".autofill-width button").on("click", function(e) {
        e.preventDefault();

        var value = $(this).attr("data-value");
        var input = $("#width");

        input.val(value).trigger("change");
    });

    $("#width, #length").on("change keyup", function() {
        calculateArea();
    });

    function calculateArea() {
        var width = $("#width").val();
        var length = $("#length").val();
        var area = $("#area");

        if(width.length > 0 && length.length > 0) {
            // calculate area
            area.val(parseFloat(width * length).toFixed(2));
            return false;
        }
        area.val("");
    }
});