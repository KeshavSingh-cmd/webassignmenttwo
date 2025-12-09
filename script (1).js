$(document).ready(function () {
  $("#regForm").on("submit", function () {
    // Simple jQuery message before submit
    $("#clientMsg").text("Submitting your application, please wait...");
    return true; // allow form submit
  });
});
