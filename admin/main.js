$(document).ready(function() {
    $("#home").removeClass();
    $("#admin").addClass("active");

    $("#btn").click(function() {
        $("#jump").toggle("");
        $("#error").toggle("");
        $("#center").toggle();
        $(".errormsg").toggle();
    });
    $("#back").click(function() {
        $("#jump").toggle("");
        $("#error").toggle("");
        $("#center").toggle();
        $(".errormsg").toggle();
    });
});