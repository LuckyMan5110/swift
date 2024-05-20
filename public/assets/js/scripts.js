$(document).ready(function(){
    
    // ______________ PAGE LOADING
    $(window).on("load", function(e) {
        $("#global-loader").fadeOut("slow");
    });

    $( ".alert" ).click(function() {
        $( this ).find( ".little-list" ).slideToggle();
    });

    $( ".alert-close" ).click(function() {
        $( this ).parent().parent().fadeOut();
    });

});
