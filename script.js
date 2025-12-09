$(document).ready(function() {
    $('#regForm').submit(function(e) {
        e.preventDefault(); // Prevent page reload

        // Collect form data
        var formData = $(this).serialize();

        // Send data to PHP using AJAX
        $.ajax({
            type: "POST",
            url: "process.php",
            data: formData,
            success: function(response) {
                // Hide Form
                $('#form-container').slideUp();
                
                // Show Result
                $('#result-container').html(response).fadeIn();
            },
            error: function() {
                alert("Error posting data");
            }
        });
    });
});
