$(document).ready(function() {
    // Hamberger Initialize
    $(".nbr-link").slideUp();

    // Link Responsive Initailize
    $("#link-sub-1").slideUp();
    $("#link-sub-2").slideUp();
    $("#link-sub-3").slideUp();
    $("#link-sub-4").slideUp();
    $("#link-sub-5").slideUp();
    $("#link-sub-6").slideUp();
    $("#link-sub-7").slideUp();
    $("#link-sub-8").slideUp();
    $("#link-sub-9").slideUp();
    $("#link-sub-10").slideUp();

        // Controller Hamberger
        $(".nav-btn").click(function() {
            $(".nbr-link").slideToggle();
        });

        // Controller link
        $("#link-1").click(function() {
            $("#link-sub-1").slideToggle();

            $("#link-sub-2").slideUp();
            $("#link-sub-3").slideUp();
            $("#link-sub-4").slideUp();
            $("#link-sub-5").slideUp();
            $("#link-sub-6").slideUp();
            $("#link-sub-7").slideUp();
            $("#link-sub-8").slideUp();
            $("#link-sub-9").slideUp();
            $("#link-sub-10").slideUp();
        });
        $("#link-2").click(function() {
            $("#link-sub-2").slideToggle();

            $("#link-sub-1").slideUp();
            $("#link-sub-3").slideUp();
            $("#link-sub-4").slideUp();
            $("#link-sub-5").slideUp();
            $("#link-sub-6").slideUp();
            $("#link-sub-7").slideUp();
            $("#link-sub-8").slideUp();
            $("#link-sub-9").slideUp();
            $("#link-sub-10").slideUp();
        });
        $("#link-3").click(function() {
            $("#link-sub-3").slideToggle();

            $("#link-sub-1").slideUp();
            $("#link-sub-2").slideUp();
            $("#link-sub-4").slideUp();
            $("#link-sub-5").slideUp();
            $("#link-sub-6").slideUp();
            $("#link-sub-7").slideUp();
            $("#link-sub-8").slideUp();
            $("#link-sub-9").slideUp();
            $("#link-sub-10").slideUp();
        });
        $("#link-4").click(function() {
            $("#link-sub-4").slideToggle();

            $("#link-sub-1").slideUp();
            $("#link-sub-2").slideUp();
            $("#link-sub-3").slideUp();
            $("#link-sub-5").slideUp();
            $("#link-sub-6").slideUp();
            $("#link-sub-7").slideUp();
            $("#link-sub-8").slideUp();
            $("#link-sub-9").slideUp();
            $("#link-sub-10").slideUp();
        });
        $("#link-5").click(function() {
            $("#link-sub-5").slideToggle();

            $("#link-sub-1").slideUp();
            $("#link-sub-2").slideUp();
            $("#link-sub-3").slideUp();
            $("#link-sub-4").slideUp();
            $("#link-sub-6").slideUp();
            $("#link-sub-7").slideUp();
            $("#link-sub-8").slideUp();
            $("#link-sub-9").slideUp();
            $("#link-sub-10").slideUp();
        });
        $("#link-6").click(function() {
            $("#link-sub-6").slideToggle();

            $("#link-sub-1").slideUp();
            $("#link-sub-2").slideUp();
            $("#link-sub-3").slideUp();
            $("#link-sub-4").slideUp();
            $("#link-sub-5").slideUp();
            $("#link-sub-7").slideUp();
            $("#link-sub-8").slideUp();
            $("#link-sub-9").slideUp();
            $("#link-sub-10").slideUp();
        });
        $("#link-7").click(function() {
            $("#link-sub-7").slideToggle();

            $("#link-sub-1").slideUp();
            $("#link-sub-2").slideUp();
            $("#link-sub-3").slideUp();
            $("#link-sub-4").slideUp();
            $("#link-sub-5").slideUp();
            $("#link-sub-6").slideUp();
            $("#link-sub-8").slideUp();
            $("#link-sub-9").slideUp();
            $("#link-sub-10").slideUp();
        });
        $("#link-8").click(function() {
            $("#link-sub-8").slideToggle();

            $("#link-sub-1").slideUp();
            $("#link-sub-3").slideUp();
            $("#link-sub-4").slideUp();
            $("#link-sub-5").slideUp();
            $("#link-sub-6").slideUp();
            $("#link-sub-7").slideUp();
            $("#link-sub-2").slideUp();
            $("#link-sub-9").slideUp();
            $("#link-sub-10").slideUp();
        });
        $("#link-9").click(function() {
            $("#link-sub-9").slideToggle();

            $("#link-sub-1").slideUp();
            $("#link-sub-3").slideUp();
            $("#link-sub-4").slideUp();
            $("#link-sub-5").slideUp();
            $("#link-sub-6").slideUp();
            $("#link-sub-7").slideUp();
            $("#link-sub-8").slideUp();
            $("#link-sub-2").slideUp();
            $("#link-sub-10").slideUp();
        });
        $("#link-10").click(function() {
            $("#link-sub-10").slideToggle();

            $("#link-sub-1").slideUp();
            $("#link-sub-3").slideUp();
            $("#link-sub-4").slideUp();
            $("#link-sub-5").slideUp();
            $("#link-sub-6").slideUp();
            $("#link-sub-7").slideUp();
            $("#link-sub-8").slideUp();
            $("#link-sub-9").slideUp();
            $("#link-sub-2").slideUp();
        });
});