$(document).ready(function () {
  $(".anchor").click(function () {
    $.ajax({
      url: "demo_test.txt",
      success: function (result) {
        $("#div1").html(result);
      },
    });
    return false;
  });
});
