$(document).ready(function () {
    $("#submit").click(function () {
        var un = $("input#username").val();
        var pw = $("input#password").val();

        $.post("hello.php", { user_name: un, pass_word: pw},
            function (data) {
                $(".container").html(data);
            }
        );
        return false;
    });
});