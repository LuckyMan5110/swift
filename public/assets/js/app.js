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

window.addEventListener('scroll', function() {
  const header = document.getElementById('header');
  if (window.scrollY > 50) {
      header.classList.add('scrolled');
  } else {
      header.classList.remove('scrolled');
  }
});

