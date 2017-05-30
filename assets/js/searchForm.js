$( document ).ready(function() {
  $("form div a.open").click(function(e) {
    e.preventDefault();
    console.log("show");
    $("#searchContent").toggleClass("hidden-xs hidden-sm");
    if ($("form div a.open i").hasClass("fa-caret-down")) {
      $("form div a.open i").attr("class","fa fa-caret-up");
    }
    else {
      $("form div a.open i").attr("class","fa fa-caret-down");
    }
  });
  // $("form div a.close").click(function() {
  //   console.log("hide");
  //   $("#searchContent").addClass("hidden-xs hidden-sm");
  // });
});
