$(document).ready(function () {
    $.ajax({
        method: "GET",
        url: "../survey/src/survey.php",
        success: function (data) {
            $("#ShowContent").html(data);
        },
    });

})

//Go To Login
$(document).on('click', '#login', () => {
    window.location = 'http://localhost/survey/login.php';
})
