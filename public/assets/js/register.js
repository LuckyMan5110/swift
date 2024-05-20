
$(document).ready(function(){
  const slidePage = document.querySelector(".slide-page");
  
  $(".firstNext").click(function(){
    const registeremail = $('#registerEmail').val();
    if (registeremail){
      // slidePage.style.marginLeft = "-14%";
      $('#firstSignup').hide();
      $('#secondSignup').show();
    }
  });
  
  
  $(".prev-1").click(function(){
    // slidePage.style.marginLeft = "11%";
    $('#firstSignup').show();
    $('#secondSignup').hide();
  });

});



