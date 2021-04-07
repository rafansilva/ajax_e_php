$(function () {
    function load(action) {
        var load_div = $(".ajax_load");

        if (action === "open") {
            load_div.fadeIn(200).css("display", "flex");
        }

        if (action === "close") {
            load_div.fadeOut(200);
        }
    }

    $("form").submit(function (e) {
        e.preventDefault();

        var form = $(this);
        var form_ajax = $(".form_ajax");
        var comments = $(".main_comments");

        $.ajax({
            url: form.attr("action"),
            data: form.serialize(),
            type: "post",
            dataType: "json",
            beforeSend: function () {
                load("open");
            },
            success: function (callback){
                load("close");

                if (callback.response){
                    form_ajax.html(callback.response).effect("bounce").fadeIn();
                } else{
                    $(this).html("");
                }

                if (callback.comment){
                    comments.prepend(callback.comment);
                }
            }
        });
    });
});