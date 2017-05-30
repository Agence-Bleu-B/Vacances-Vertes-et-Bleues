$( document ).ready(function() {
  $("form div a.open").click(function(e) {
    e.preventDefault();
    console.log("show");
    $("#searchContent").toggleClass("hidden-xs hidden-sm");
  });
  // $("form div a.close").click(function() {
  //   console.log("hide");
  //   $("#searchContent").addClass("hidden-xs hidden-sm");
  // });
});
