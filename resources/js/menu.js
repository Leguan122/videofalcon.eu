$( "#dropdownDefault" ).click(function() {
    $("#dropdown").toggleClass("hidden");
});

$( "#popup" ).click(function() {
    $("#popup").toggleClass("hidden");
});

$( ".show_video" ).click(function(e) {
    $("#popup").toggleClass("hidden");

    $("#youtube").attr("src",$(this).attr('id'));
});
