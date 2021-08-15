$(document).ready(function () {

    $("button").click(function (e) {
        $.ajax({
            type: "POST",
            url: "abcd.php",
            data: {
                username: "nisarul",
                password: "1234abcd"
            },
            success: function (response) {
                $(".container").html(response);
            }
        });
    });
});