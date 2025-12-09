$(document).ready(function () {
    $("#applicationForm").on("submit", function (e) {
        let name = $("#fullName").val().trim();
        let email = $("#email").val().trim();
        let phone = $("#phone").val().trim();
        let course = $("#course").val().trim();

        let errorMsg = "";

        if (name === "" || email === "" || phone === "" || course === "") {
            errorMsg = "Please fill in all required fields marked with *.";
        } else if (!/^\d{10}$/.test(phone)) {
            errorMsg = "Please enter a valid 10-digit phone number.";
        }

        if (errorMsg !== "") {
            e.preventDefault(); 
            $("#errorMsg").text(errorMsg);
        } else {
            $("#errorMsg").text("");
        }
    });
});
